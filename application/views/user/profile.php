<div class="row">

    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o"></i> Avatar
                </h3>
            </div>
            <div class="panel-body">

                <?= Form::open('user/profile/avatar', array(
                    'method' => 'post',
                    'enctype' => 'multipart/form-data',
                    'class' => 'form-change-dp',
                    'id' => 'form-change-dp'
                )); ?>
                <div class="change_avatar">
                    <a href="#" id="click_dp" class="thumbnail">
                        <img id="img_avatar"
                             src="<?php echo empty($user->profile_pic) ? $imagesDirectory['relative'] . 'default_avatar.gif' : $avatarDirectory['relative'] . $user->id . '/' . $user->profile_pic; ?>"
                             alt="125x125">
                    </a>
                </div>
                <?= Form::input('avatar', '',
                    ['id' => 'avatar', 'type' => 'file', 'class' => 'form-control', 'style' => 'display:none']); ?>
                <?= Form::close(); ?>

                <div class="caption" style="text-align:center;">
                    <h3 class="full_avatar_name"><?= $user->full_name ?></h3>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o"></i> User Profile
                </h3>
            </div>
            <div class="panel-body">

                <div id="profile_updated_status" class="alert alert-success alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-user"></i> Profile Updated!<a class="anchorjs-link"
                                                                  href="#oh-snap!-you-got-an-error!"><span
                            class="anchorjs-icon"></span></a>
                </div>

                <?= Form::open('user/profile/save', array('class' => 'search_form', 'id' => 'user_profile_form')); ?>

                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <?= Form::input('username', $user->username,
                        ['placeholder' => 'Username', 'class' => 'form-control', 'disabled' => 'disabled']); ?>
                </div>

                <div class="form-group">
                    <div class="full-name-error">
                        <label class="control-label" for="full_name">Full Name</label>
                        <?= Form::input('full_name', $user->full_name,
                            ['placeholder' => 'Full Name', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="ministry-error">
                        <label class="control-label force_display-block" for="ministry">Ministry</label>
                        <?php echo Form::select('ministry', $ministries, $user->ministry_id,
                            array('class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?= Form::button('update_profile', 'Update Profile',
                        array('type' => 'submit', 'class' => 'btn btn-primary btn-block')); ?>
                </div>

                <?= Form::close(); ?>

            </div>
        </div>
    </div>
</div>