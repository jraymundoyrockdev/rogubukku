<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-cog"></i> Change Password
                </h3>
            </div>
            <div class="panel-body">

                <div id="password_updated_status" class="alert alert-success alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-user"></i> Password Updated!<a class="anchorjs-link"
                                                                   href="#oh-snap!-you-got-an-error!"><span
                            class="anchorjs-icon"></span></a>
                </div>

                <div id="password_not_updated_status" class="alert alert-danger alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <i class="fa fa-exclamation-triangle"></i> Old password mismatch.
                </div>
                <?= Form::open('user/change_password/save',
                    array('class' => 'search_form', 'id' => 'change_password_form')); ?>

                <div class="form-group">
                    <div class="old-password-error">
                        <label class="control-label" for="username">Old Password</label>
                        <?= Form::password('old_password', '',
                            ['placeholder' => 'Old Password', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="new-password-error">
                        <label class="control-label" for="new_password">New Password</label>
                        <?= Form::password('new_password', '',
                            ['placeholder' => 'New Password', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="confirm-new-password-error">
                        <label class="control-label" for="confirm_new_password">Confirm New Password</label>
                        <?= Form::password('confirm_new_password', '',
                            ['placeholder' => 'Confirm New Password', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?= Form::button('update_password', 'Update Password',
                        array('type' => 'submit', 'class' => 'btn btn-primary btn-block')); ?>
                </div>

                <?= Form::close(); ?>

            </div>
        </div>
    </div>
</div>