<div class="row">

    <div class="col-lg-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o"></i> Avatar
                </h3>
            </div>
            <div class="panel-body">

            <a href="#" class="thumbnail">
                <img src="http://dismagazine.com/uploads/2011/08/notw_silhouette-1.jpg" alt="125x125">
            </a>

            <div class="caption" style="text-align:center;">
                <h3><?=$auth_ins->full_name?></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula. Cras justo odio, dapibus ac facilisis in quam.</p>
                <p><a href="#" class="btn btn-primary">Change</a></p>
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

                <form>
                    <div class="form-group">
                        <label class="control-label" for="username">Username</label>
                         <?=Form::input('username', $username, ['placeholder'=>'Username', 'class'=>'form-control', 'disabled'=>'disabled']);?>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="full_name">Full Name</label>
                        <?=Form::input('full_name', $auth_ins->full_name, ['placeholder'=>'Full Name', 'class'=>'form-control']);?>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label force_display-block" for="full_name">Ministry</label>
                        <div class="btn-group" data-toggle="buttons">

                            <?php foreach($ministries as $m):?>

                            <label class="btn btn-primary <?=($current_ministry==$m->ministry_id) ? 'active':''?>">
                                <?=Form::radio('options', $m->ministry, ['autocomplete'=>'off']);?> <?=$m->ministry?>
                            </label>

                            <?php endforeach;?>
                        </div>
                    </div>

                    <div class="form-group">
                       <button type="button" class="btn btn-primary btn-lg btn-block">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>