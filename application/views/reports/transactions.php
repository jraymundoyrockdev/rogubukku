<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list"></i> Transactions Report
                </h3>
            </div>

            <div class="panel-body">

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-1" for="transaction">Transaction</label>
                        <div class="col-sm-3">
                            <?= Form::input('transaction_type', '', [
                                'id' => 'transactionType',
                                'placeholder' => 'Search by: [Print, Encode, etc..]',
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
                                'placeholder' => 'Search by: [Dance, Theater, Music etc..]',
                                'class' => 'form-control',
                                'maxlength' => 10
                            ]); ?>
                        </div>
                    </div>
                </form>
                <hr>
                <table class="table table-striped table-bordered hover" cellspacing="0" width="100%"
                       id="transactionsList">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Transaction</th>
                        <th>Colored</th>
                        <th>Non-colored</th>
                        <th>Reason</th>
                        <th>Used By</th>
                        <th>Transaction Date</th>
                        <th>Logged Date</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1;
                    foreach ($transactions as $tran) : ?>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= ucfirst($tran->transaction) ?></td>
                            <td><?= $tran->colored ?></td>
                            <td><?= $tran->non_colored ?></td>
                            <td><?= ucfirst($tran->reason) ?></td>
                            <td><?= $tran->ministry->ministry ?></td>
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
