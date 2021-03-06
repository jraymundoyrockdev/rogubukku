<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart"></i> Transactions Report
                </h3>
            </div>

            <div class="panel-body">

                <form class="form-horizontal" id="reportQBE">
                    <div class="form-group">
                        <label class="col-sm-1" for="transaction">Transaction</label>

                        <div class="col-sm-3">
                            <?= Form::input('transaction_type', '', [
                                'id' => 'transactionType',
                                'class' => 'form-control',
                                'maxlength' => 10
                            ]); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1" for="transaction">Ministry</label>

                        <div class="col-sm-3">
                            <?= Form::input('ministry', '', [
                                'id' => 'ministry',
                                'class' => 'form-control',
                                'maxlength' => 10
                            ]); ?>
                        </div>
                    </div>

                    <?php if (Auth::instance()->logged_in("admin")): ?>
                        <div class="form-group">
                            <label class="col-sm-1" for="user">Logged&nbsp;By</label>

                            <div class="col-sm-3">
                                <?= Form::input('user', '', [
                                    'id' => 'loggedBy',
                                    'class' => 'form-control',
                                    'maxlength' => 20
                                ]); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label class="col-sm-1" for="dateFrom" style="margin-right: 15px;">Date&nbsp;From </label>
                        <div class="input-group date">
                            <div id="dateFromDatepicker">
                                <?= Form::input('dateFrom', '',
                                    ['id' => 'dateFrom', 'class' => 'form-control', 'readonly' => 'readonly',' style' => 'width:80%;']); ?>
                                <span class="input-group-addon" id="icon-calendar" style="padding: 8px 12px;">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <small>(Transaction Date - For Print Only)</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1" for="dateFrom" style="margin-right: 15px;">Date&nbsp;To </label>
                        <div class="input-group date">
                            <div id="dateToDatepicker">
                                <?= Form::input('dateTo', '',
                                    ['id' => 'dateTo', 'class' => 'form-control', 'readonly' => 'readonly', 'style' => 'width:80%;']); ?>
                                <span class="input-group-addon" id="icon-calendar" style="padding: 8px 12px;">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <small>(Transaction Date - For Print Only)</small>
                            </div>
                        </div>
                    </div>

                </form>

                <hr>
                <p class="text-right"><a href="/print_report/transactions" id="btnPrint" target="_blank"><i
                            class="fa fa-print fa-2x"></i></a></p>
                <table class="table table-striped table-bordered hover" cellspacing="0" width="100%"
                       id="transactionsList">
                    <thead>
                    <tr class="hack-shield-th">
                        <th>#</th>
                        <th>Transaction</th>
                        <th>Colored</th>
                        <th>Non-colored</th>
                        <th>Reason</th>
                        <th>Used By</th>
                        <th>Transaction Date</th>
                        <th>Logged Date</th>

                        <?php if (Auth::instance()->logged_in("admin")): ?>

                            <th>Logged By</th>

                        <?php endif; ?>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1;
                    foreach ($transactions as $tran) : ?>

                        <tr class="hack-shield-td">
                            <td><?= $i++ ?></td>
                            <td><?= ucfirst($tran->transaction) ?></td>
                            <td><?= $tran->colored ?></td>
                            <td><?= $tran->non_colored ?></td>
                            <td><?= ucfirst(nl2br($tran->reason)) ?></td>
                            <td><?= $tran->ministry->ministry ?></td>
                            <td><?= $tran->transaction_date ?></td>
                            <td><?= $tran->logged_date ?></td>

                            <?php if (Auth::instance()->logged_in("admin")): ?>

                                <td><?= $tran->users->full_name ?></td>

                            <?php endif; ?>

                            <td><?= (!$tran->status) ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Deleted</span>' ?></td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
