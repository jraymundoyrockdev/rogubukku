<ul class="nav navbar-nav navbar-right navbar-user">
    <?php if (Auth::instance()->logged_in("admin")): ?>
        <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> System <b
                    class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?= URL::site('admin/ministry'); ?>"><i class="fa fa-life-ring"></i> Ministries</a></li>
                <li><a href="<?= URL::site('admin/userroles'); ?>"><i class="fa fa-user"></i> User Roles</a></li>
                <li><a href="<?= URL::site('admin/users'); ?>"><i class="fa fa-users"></i> User Management</a></li>
                <li><a href="<?= URL::site('admin/announcements'); ?>"><i class="glyphicon glyphicon-pushpin"></i> Announcements</a></li>
            </ul>
        </li>
    <?php endif; ?>

    <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
            <span class="full_avatar_name"><?= Auth::instance()->get_user()->full_name ?></span> <b
                class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?= URL::site('user/profile'); ?>"><i class="fa fa-user-secret"></i> Profile</a></li>
            <li><a href="<?= URL::site('user/change_password'); ?>"><i class="fa fa-unlock-alt"></i> Change Password</a>
            </li>
            <li><a href="<?= URL::site('login/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
        </ul>
    </li>
</ul>