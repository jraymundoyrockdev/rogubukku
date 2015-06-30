<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tasks"></i> Announcements
                </h3>

            </div>
            <div class="panel-body">
                <div id="announcement_created" class="alert alert-success alert-dismissible fade in" role="alert"
                     style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-user"></i> Announcement Created!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a>
                </div>

                <?= Form::open('admin/announcements/save', array('class' => 'search_form', 'id' => 'announcements_form')); ?>

                <div class="form-group">
                    <div class="announcements-type-error">
                        <label class="control-label" for="message">Message</label>
                        <?= Form::textarea('message', '', [
                            'placeholder' => 'Message',
                            'class' => 'form-control',
                            'maxlength' => 500
                        ]); ?>
                    </div>
                </div>

                <div class="form-group announcements_form">
                    <div class="col-lg-12 announcement-date-error input-group date" id='datetimepickerFrom'>
                        <label class="control-label" for="announcement_date">From</label>

                        <div class="input-group">
                            <?= Form::input('from_date', '',
                                ['id' => 'from_date', 'class' => 'form-control', 'readonly' => 'readonly']); ?>
                            <span class="input-group-addon" id="icon-calendar">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>

                <?= Form::close(); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-3 well">
        <a href="<?= URL::site('admin/announcements'); ?>" class="btn btn-info col-lg-12" role="button">
            Announcement List
        </a>
    </div>
</div>