<p class="text-right">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ministryModal"><i class="fa fa-plus-square"></i> Add New</button>
</p>
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
                <table class="sui-table sui-hover sui-selectable">
                    <colgroup>
                        <col style="width:70px">
                        <col>
                    </colgroup>
                    <tbody>
                        <?php $i=1; foreach ($ministries as $m):?>
                        <tr class="sui-<?=($i % 2 == 0) ? 'row' : 'alt-row';?>">
                            <td class="sui-cell"><?=$i++?></th>
                            <td class="sui-cell"><?=$m->ministry?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ministryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
             <?=Form::open('admin/ministry/save', array('class'=>'search_form','id'=>'user_profile_form'));?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ministryModalLabel">Add New Ministry</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Ministry:</label>
                        <?=Form::input('ministry', '', ['placeholder'=>'Ministry', 'class'=>'form-control']);?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <?=Form::button('save_ministry', '<i class="fa fa-floppy-o"></i> Save', array('type' => 'submit', 'class'=>'btn btn-primary'));?>  
                </div>
            <?=Form::close();?>
        </div>
    </div>
</div>