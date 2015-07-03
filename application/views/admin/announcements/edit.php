<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil"></i> Update Announcement
                </h3>

            </div>
            <div class="panel-body">
                <div id="announcement_created" class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-ok"></i> Announcement Updated!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a>
                </div>

                <?= Form::open('admin/announcements/save', array('class' => 'search_form', 'id' => 'announcements_form')); ?>

                <div class="form-group">
                    <div class="message-error">
                        <label class="control-label" for="message">Message</label>
                        <?= Form::textarea('message', $announcements->message, [
                            'placeholder' => 'Message',
                            'class' => 'form-control',
                            'maxlength' => 500,
                            'rows' => 2
                        ]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="type-error">
                        <label class="control-label" for="type">Type</label>
                        <?= Form::select('type', ['critical'=>'Critical','non-critical'=>'Non-Critical'], $announcements->type, [
                            'placeholder' => 'Type',
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
                <div class="form-group announcements_form">
                    <div class='col-md-6 from-date-error'>
                        <div class="form-group">
                            <label class="control-label" for="from_date">From</label>
                            <div class='input-group date' id='datetimepickerFromDate'>
                                <?= Form::input('from_date', $announcements->from_date,
                                    ['id' => 'from_date', 'class' => 'form-control', 'readonly' => 'readonly', 'placeholder' => 'From']); ?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 to-date-error'>
                        <div class="form-group">
                            <label class="control-label" for="to_date">To</label>
                            <div class='input-group date' id='datetimepickerToDate'>
                                <?= Form::input('to_date', $announcements->to_date,
                                    ['id' => 'to_date', 'class' => 'form-control', 'readonly' => 'readonly', 'placeholder' => 'To']); ?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <?= Form::hidden('id', $announcements->id); ?>
                <?= Form::hidden('saveType', '', ['id' => 'saveType']); ?>

                <div class="col-lg--12">
                    <div class="form-group">
                        <?= Form::button('createAnnouncement', 'Update', array(
                            'type' => 'submit',
                            'class' => 'btn btn-primary btn-block',
                            'id' => 'updateAnnouncement',
                        )); ?>
                    </div>
                </div>

                <?= Form::close(); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-3 well">
        <a href="<?= URL::site('admin/announcements/create'); ?>" class="btn btn-info col-lg-12" role="button">
            Create New
        </a>
        <hr style="padding-top:10px;">
        <a href="<?= URL::site('admin/announcements'); ?>" class="btn btn-warning col-lg-12" role="button">
            Announcement List
        </a>
    </div>
</div>