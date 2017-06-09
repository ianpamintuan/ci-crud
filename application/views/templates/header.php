<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter CRUD</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
</head>
<body>
    <header>

        <nav class="navbar navbar-default">
          <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url('dashboard'); ?>">Codeigniter</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expandede="false">
                      <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Message 1</a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Message 2</a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Message 3</a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Message 4</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-center"><a href="#"><strong>See All Messages</strong> <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expandede="false">
                      <i class="fa fa-tasks fa-lg" aria-hidden="true"></i>
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Task 1</a></li>
                        <li><a href="#">Task 2</a></li>
                        <li><a href="#">Task 3</a></li>
                        <li><a href="#">Task 4</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-center"><a href="#"><strong>See All Tasks</strong> <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expandede="false">
                      <i class="fa fa-bell fa-lg" aria-hidden="true"></i>
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> New Comment</a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> New Followers</a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Message Sent</a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i> New Task</a></li>
                        <li><a href="#"><i class="fa fa-server" aria-hidden="true"></i> Server Rebooted</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="text-center"><a href="#"><strong>See All Notifications</strong> <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> User Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                  </ul>
                </li>
              </ul>

            </div>

          </div>
        </nav>

    </header>
