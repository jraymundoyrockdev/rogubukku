<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">Rogubukku <small>(beta 1.0)</small> - <small><strong>G</strong>olden <strong>F</strong>aith <strong>C</strong>enter <strong>C</strong>hristian <strong>M</strong>inistries </small></a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="<?php if ($routeName == 'dashboard') {
                echo 'active';
            } ?>"><a href="<?= URL::site('dashboard'); ?>"><i class="fa fa-tachometer"></i> Dashboard </a></li>
            <li class="<?php if ($routeName == 'transactions') {
                echo 'active';
            } ?>"><a href="<?= URL::site('transactions'); ?>"><i class="fa fa-tasks"></i> Transactions</a></li>
            <li class="<?php if ($routeName == 'reports-transactions') {
                echo 'active';
            } ?>">
                <a href="<?= URL::site('reports/transactions'); ?>"><i class="fa fa-bar-chart"></i> Reports</a>
            </li>
            <li class="<?php if ($routeName == 'timeline') {
                echo 'active';
            } ?>"><a href="<?= URL::site('timeline'); ?>"><i class="fa fa-clock-o"></i> Timeline</a></li>
        </ul>

        <?php echo View::factory('templates/header')->bind('user', $user) ?>

    </div>
</nav>