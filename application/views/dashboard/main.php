<div class="row">
    <div class="col-lg-12">
        <div class="page-header-dashboard">
            <h2><i class="fa fa-tachometer"></i> Dashboard</h2>
        </div>
        <?= View::factory('dashboard/transactions_total') ?>
    </div>
    <hr/>
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-calendar"></i>
                    Transaction Usage Per Month
                </h3>
            </div>

            <div class="panel-body">
                <div id="totalTransactionsPerMonth"></div>
            </div>
        </div>
    </div>
     <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="glyphicon glyphicon-pushpin"></i>
                    Announcements
                </h3>
            </div>
            <div class="panel-body">
                <?= View::factory('dashboard/announcements')
                                    ->bind('announcements', $announcements)
                                    ->bind('noAnnouncements', $noAnnouncements)
                ?>
            </div>
        </div>
    </div>
    </div>

    <?php if (Auth::instance()->logged_in("admin")): ?>

        <div class="col-lg-6">
            <?= View::factory('dashboard/recent_transactions')->bind('transactions', $transactions) ?>
        </div>

        <div class="col-lg-6">
            <?= View::factory('dashboard/ministry_usage') ?>
        </div>
    <?php endif; ?>
</div>
