<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart"></i> Announcements
                </h3>
            </div>

            <div class="panel-body">
                <table class="table table-striped table-bordered hover" cellspacing="0" width="100%"
                       id="announcementsList">
                    <thead>
                        <tr class="hack-shield-th">
                            <th>#</th>
                            <th>Message</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1;
                    foreach ($announcements as $a) : ?>

                        <tr id="tr_<?= $a->id ?>" class="hack-shield-td">
                            <td><?= $i++ ?></td>
                            <td><?= ucfirst($a->message) ?></td>
                            <td><?= date_format(date_create($a->from_date), 'Y-m-d h:i A') ?></td>
                            <td><?= date_format(date_create($a->to_date), 'Y-m-d h:i A') ?></td>
                            <td><?= ucfirst($a->type) ?></td>
                            <td class="text-center">
                                <a href="<?= URL::site('admin/announcements/edit/' . $a->id); ?>"
                                   data-toggle="tooltip" data-placement="top"
                                   title="Edit"><i class="fa fa-pencil fa-2x"></i></a>

                                <span data-toggle="tooltip" data-placement="top" title="Delete">
                                    <a data-toggle="modal" data-target="#deleteModal" role="button"
                                       id="<?= $a->id ?>" class="deleteLink">
                                        <i class="fa fa-trash-o fa-2x"></i>
                                    </a>
                                </span>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-3 well">
        <a href="<?= URL::site('admin/announcements/create'); ?>" class="btn btn-info col-lg-12" role="button">
            Create New
        </a>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel-body">
                <div class="modal-header">
                    <button class="close" aria-label="Close" data-dismiss="modal" type="button"></button>
                    <h4>Are you sure you want to delete this announcement?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
                    <button class="btn btn-info btn-sm" id="deleteButtonYes">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>