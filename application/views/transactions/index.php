<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list"></i> All Transactions
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
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach ($transactions as $tran) : ?>

                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= ucfirst($tran->transaction)?></td>
                                <td><?= ucfirst($tran->reason) ?></td>
                                <td><?= $tran->transaction_date ?></td>
                                <td><a href="<?=URL::site('transactions/edit/'.$tran->id);?>">EDIT</a></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3 well">
        <a href="<?=URL::site('transactions');?>" class="btn btn-info col-lg-12" role="button">
           <i class="fa fa-plus-square"></i> Create New Transaction
        </a>
    </div>
</div>
