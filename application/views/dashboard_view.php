<div class="container">
  <h1>Dashboard</h1>
  <hr>

  <div class="row">
    <div class="col-xs-12">

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-body" id="details_panel">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>New Comments</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-body" id="tasks_panel">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">12</div>
                  <div>New Tasks</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View tasks</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-body" id="orders_panel">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-shopping-cart fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">124</div>
                  <div>New Orders</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View orders</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-body" id="tickets_panel">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge"><?php echo $users_count; ?></div>
                  <div>Users</div>
                </div>
              </div>
            </div>
            <a href="<?php echo site_url('users'); ?>">
              <div class="panel-footer">
                <span class="pull-left">View users</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
        </div>
      </div>

    </div>
  </div>
