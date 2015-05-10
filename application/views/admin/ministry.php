<div class="bs-example" data-example-id="simple-table">
<p class="text-right">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ministryModal" data-whatever="@getbootstrap"><i class="fa fa-plus-square"></i> Add New</button>
</p>
    <table class="table">
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