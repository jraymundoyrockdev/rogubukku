<div class="container transaction-print" xmlns="http://www.w3.org/1999/html">
    <h4>Transactions Report</h4>
    <hr/>

    <div class="text-left">

        <ul class="list-unstyled">

            <?php if($query['transaction_type']):?>
            <li><strong>Type: </strong><?=$query['transaction_type']?></li>
            <?php endif;?>

            <?php if($query['user']):?>
            <li><strong>User: </strong><?=$query['user']?></li>
            <?php endif;?>

            <?php if($query['user']):?>
            <li><strong>Ministry: </strong><?=$query['ministry']?></li>
            <?php endif;?>
            <li><strong>Date From:</strong> Feb 6, 2015 <strong>To:</strong> Mar 6,2015</li>
        </ul>
        <p class="text-right"><strong>Legend</strong>: <strong>B</strong> - Black Only <strong>C</strong> - Colored</p>
    </div>
    <div class="table-responsive">
        <table class="table-bordered table">
            <thead>
            <tr>
                <th>#</th>
                <th>Transaction</th>
                <th width="300px;">Reason</th>
                <th>C</th>
                <th>B</th>
                <th>Transaction Date</th>
                <th>Logged Date</th>
                <th>User</th>
                <th>Ministry</th>
            </tr>

            </thead>
            <tbody>
            <?php $i = 1;
            foreach ($transactionsList as $tl):?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td style="text-transform: uppercase;"><?= $tl['transaction'] ?></td>
                    <td><?= $tl['reason'] ?></td>
                    <td><?= $tl['colored'] ?></td>
                    <td><?= $tl['non_colored'] ?></td>
                    <td><?= $tl['transaction_date'] ?></td>
                    <td><?= $tl['logged_date'] ?></td>
                    <td><?= $tl['full_name'] ?></td>
                    <td><?= $tl['ministry'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    //window.print();
</script>