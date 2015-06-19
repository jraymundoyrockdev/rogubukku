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
            <li class="<?php if ($routeName == 'dashboard') {echo 'active';} ?>"><a href="<?= URL::site('dashboard'); ?>"><i class="fa fa-bullseye"></i> Dashboard </a></li>
            <li class="<?php if ($routeName == 'transactions') {echo 'active';} ?>"><a href="<?=URL::site('transactions');?>"><i class="fa fa-tasks"></i> Transactions</a></li>
            <li class="<?php if ($routeName == 'reports-transactions') {echo 'active';} ?>">
                <a href="<?= URL::site('reports/transactions'); ?>"><i class="fa fa-globe"></i> Reports</a>
            </li>
            <li><a href="#"><i class="fa fa-font"></i> Timeline</a></li>
        </ul>

        <?php echo View::factory('templates/header')->bind('user', $user) ?>

    </div>
</nav>