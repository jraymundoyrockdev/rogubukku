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
                <h3><?=Auth::instance()->get_user()->full_name?></h3>
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
                        <label class="control-label" for="inputSuccess1">Full Name</label>
                        <input type="text" class="form-control " id="inputSuccess1">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputSuccess1">Username</label>
                        <input type="text" class="form-control" id="inputSuccess1">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="inputSuccess1">Ministry</label>
                        <select class="form-control">
                      <option selected>Non</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    </div>

                    <div class="form-group">
                       <button type="button" class="btn btn-primary btn-lg btn-block">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>