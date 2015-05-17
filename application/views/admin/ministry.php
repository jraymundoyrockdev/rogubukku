<div class="bs-example" data-example-id="simple-table">
    <div id="ministry_updated" class="alert alert-success alert-dismissible fade in" role="alert" style="display:none;">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
         <i class="fa fa-user"></i> Ministry Save!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a>
    </div>
    <p class="text-right">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ministryModal" data-whatever="@getbootstrap"><i class="fa fa-plus-square"></i> Add New</button>
    </p>
       
    <table class="table" id="ministryList">
        <caption>Optional table caption.</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Ministry</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($ministries as $m):?>
                <tr>
                    <th scope="row"><?=$i++?></th>
                    <td><?=$m->ministry?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="ministryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel-body">
                    <?=Form::open('admin/ministry/save', array('class'=>'search_form','id'=>'admin_ministry_form'));?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ministryModalLabel">Add New Ministry</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="ministry-error">
                            <label for="recipient-name" class="control-label">Ministry:</label>
                            <?=Form::input('ministry', '', ['placeholder'=>'Ministry', 'class'=>'form-control']);?>
                        </div>
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
</div>