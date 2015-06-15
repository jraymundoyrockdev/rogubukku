<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list"></i> All Transactions
                    <a href="<?=URL::site('transactions');?>" class="pull-right"><i class="fa fa-plus"></i> Create Transactions</a>
                </h3>
            </div>

            <div class="panel-body">
                <table class="table table-bordered display" id="transaction_list">
                    <colgroup>
                        <col style="width:70px">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Transaction
                            </th>
                            <th>
                                Reason
                            </th>
                            <th>
                                Transaction Date
                            </th>
                            <th>
                                Logged Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach ($user->transactions->order_by('logged_date', 'desc')->find_all() as $tran) : ?>

                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= ucfirst($tran->transaction)?></td>
                                <td><?= ucfirst($tran->reason) ?></td>
                                <td><?= $tran->transaction_date ?></td>
                                <td><?= $tran->logged_date ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
