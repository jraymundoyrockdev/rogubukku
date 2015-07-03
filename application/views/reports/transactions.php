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

                </form>
                <hr>
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
                            <td><?= ucfirst($tran->reason) ?></td>
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

<a href="/print_report/transactions" id="btnPrint" target="_blank">Print Me</a>
