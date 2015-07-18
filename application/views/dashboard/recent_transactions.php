<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-tasks"></i>
            Recent Transactions
        </h3>
    </div>

    <div class="panel-body">

        <div id="shieldui-grid1" class="sui-grid sui-grid-core">
            <div class="sui-gridheader">
                <table class="sui-table sui-non-selectable">
                    <colgroup>
                        <col style="width:70px">
                    </colgroup>

                    <thead>
                    <tr class="sui-columnheader">
                        <th class="sui-headercell" data-field="id">#</th>
                        <th class="sui-headercell" data-field="name">Transaction</th>
                        <th class="sui-headercell" data-field="name">Logged By</th>
                        <th class="sui-headercell" data-field="name">Date</th>
                        <th class="sui-headercell" data-field="name">Status</th>
                    </tr>
                    </thead>
                </table>
            </div>

            <div class="sui-gridcontent">
                <table class="sui-table sui-hover sui-selectable" id="ministryList">
                    <colgroup>
                        <col style="width:70px">
                        <col>
                    </colgroup>
                    <tbody>
                    <?php $i = 1;
                    foreach ($transactions as $tran): ?>
                        <tr class="sui-<?= ($i % 2 == 0) ? 'row' : 'alt-row'; ?>">
                            <td class="sui-cell"><?= $i++ ?></td>
                            <td class="sui-cell"><?= $tran->transaction ?></td>
                            <td class="sui-cell"><?= $tran->users->full_name ?></td>
                            <td class="sui-cell"><?= $tran->transaction_date ?></td>
                            <td class="sui-cell"><?= (!$tran->status) ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Deleted</span>' ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>