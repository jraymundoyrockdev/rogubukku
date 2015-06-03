<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard">Rogubukku Baby</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
<<<<<<< HEAD
            <li class="active" id="nav_dashboard"><a href="<?=URL::site('dashboard');?>"><i class="fa fa-bullseye"></i> Dashboard</a></li>
            <li id="nav_transactions"><a href="<?=URL::site('transactions');?>"><i class="fa fa-tasks"></i> Transactions</a></li>
            <li id="reports"><a href="#"><i class="fa fa-globe"></i> Reports</a></li>
=======
            <li class="active"><a href="<?= URL::site('dashboard'); ?>"><i class="fa fa-bullseye"></i> Dashboard</a>
            </li>
            <li><a href="#"><i class="fa fa-tasks"></i> Transcation</a></li>
            <li><a href="#"><i class="fa fa-globe"></i> Reports</a></li>
>>>>>>> story_3_42

            <?php if (Auth::instance()->logged_in("admin")): ?>
                <li><a href="#"><i class="fa fa-font"></i> Timeline</a></li>
            <?php endif; ?>
        </ul>

        <?php echo View::factory('templates/header')->bind('user', $user) ?>

    </div>
</nav>