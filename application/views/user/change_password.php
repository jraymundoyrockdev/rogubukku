<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-unlock-alt"></i> Change Password
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
                <div class="form-group" id="div_old_password_error">
                    <div class="old-password-error">
                        <label class="control-label" for="username">Old Password</label>
                        <?= Form::password('old_password', '',
                            [
                                'placeholder' => 'Old Password',
                                'class' => 'old-password form-control',
                                'autocomplete' => 'off'
                            ]); ?>
                        <small id="old_pass_not_exist" style="display: none;" class="help-block removableFromAjax"
                               data-fv-for="old_password" data-fv-result="INVALID">Old password does not exist.
                        </small>
                    </div>
                </div>

                <div class="form-group">
                    <div class="new-password-error">
                        <label class="control-label" for="password">New Password</label>
                        <?= Form::password('password', '',
                            ['placeholder' => 'New Password', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="confirm-new-password-error">
                        <label class="control-label" for="confirm_new_password">Confirm New Password</label>
                        <?= Form::password('confirm_new_password', '',
                            [
                                'placeholder' => 'Confirm New Password',
                                'class' => 'form-control',
                                'autocomplete' => 'off'
                            ]); ?>
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