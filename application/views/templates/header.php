<ul class="nav navbar-nav navbar-right navbar-user">
    <li class="dropdown messages-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span
                class="badge">2</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="dropdown-header">2 New Messages</li>
            <li class="message-preview">
                <a href="#">
                    <span class="avatar"><i class="fa fa-bell"></i></span>
                    <span class="message">Security alert</span>
                </a>
            </li>
            <li class="divider"></li>
            <li class="message-preview">
                <a href="#">
                    <span class="avatar"><i class="fa fa-bell"></i></span>
                    <span class="message">Security alert</span>
                </a>
            </li>
            <li class="divider"></li>
            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
        </ul>
    </li>

    <?php //if (Auth::instance()->logged_in("admin")): ?>
    <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> System <b
                class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?= URL::site('admin/ministry'); ?>"><i class="fa fa-user"></i> Ministries</a></li>
            <li><a href="<?= URL::site('admin/userroles'); ?>"><i class="fa fa-gear"></i> User Roles</a></li>
            <li><a href="<?= URL::site('admin/users'); ?>"><i class="fa fa-gear"></i> User Management</a></li>
        </ul>
    </li>
    <?php //endif;?>

    <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle full_avatar_name" data-toggle="dropdown"><i
                class="fa fa-user"></i> <?= Auth::instance()->get_user()->full_name ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?= URL::site('user/profile'); ?>"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="<?= URL::site('user/change_password'); ?>"><i class="fa fa-cog"></i> Change Password</a></li>
            <li><a href="<?= URL::site('login/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
    </li>
</ul>