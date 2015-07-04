<div class="container transaction-print" xmlns="http://www.w3.org/1999/html">
    <h2>Transaction List Report</h2>

        <div>
            <p class="text-left">
                <strong>Transaction Type:</strong> Print
                Print Date: <?php echo date('F j, Y' );?></p>
            <br>
            <strong>User:</strong> Print <br>
            <strong>Ministry:</strong> Print <br>
            <strong>Date From:</strong> Jun 23, 2015 To: July 24, 2015 <br>


            <br>
            Legend: B - Black Ink C - Colored
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
            <?php  $i=1;
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
  //  window.print();
</script>