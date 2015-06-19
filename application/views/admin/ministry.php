<div id="ministry_updated" class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-user"></i> Ministry Save!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span
            class="anchorjs-icon"></span></a>
</div>
<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o"></i>
                    Ministries
                </h3>
            </div>

            <div class="panel-body">
                <div id="shieldui-grid1" class="sui-grid sui-grid-core">
                    <div class="sui-gridheader">
                        <table class="sui-table sui-non-selectable">
                            <colgroup>
                                <col style="width:70px">
                                <col>
                            </colgroup>

                            <thead>
                            <tr class="sui-columnheader">
                                <th class="sui-headercell" data-field="id">
                                    #
                                </th>
                                <th class="sui-headercell" data-field="name">
                                    Ministry
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="sui-gridcontent">
                        <table class="sui-table sui-hover sui-selectable" id="ministryList">
                            <colgroup>
                                <col style="width:70px">
                                <col>
                            </colgroup>
                            <tbody>
                            <?php $i = 1;
                            foreach ($ministries as $m): ?>
                                <tr class="sui-<?= ($i % 2 == 0) ? 'row' : 'alt-row'; ?>">
                                    <td class="sui-cell"><?= $i++ ?></td>
                                    <td class="sui-cell"><?= $m->ministry ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 well">
        <button type="button" class="btn btn-primary col-lg-12" data-toggle="modal" data-target="#ministryModal"><i
                class="fa fa-plus-square"></i> Add New
        </button>
    </div>
</div>

<div class="modal fade" id="ministryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel-body">
                <?= Form::open('admin/ministry/save',
                    array('class' => 'search_form', 'id' => 'admin_ministry_form')); ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ministryModalLabel">Add New Ministry</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="ministry-error">
                            <label for="recipient-name" class="control-label">Ministry:</label>
                            <?= Form::input('ministry', '',
                                ['placeholder' => 'Ministry', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <?= Form::button('save_ministry', '<i class="fa fa-floppy-o"></i> Save',
                        array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
                </div>
                <?= Form::close(); ?>
            </div>
        </div>
    </div>
</div>