<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Scale | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/icon.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css')?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/datatables.css')?>" type="text/css" />


  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url('assets/js/jqueryForm.min.js')?>"></script> 



    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
  </head>
  <body class="">
    <section class="vbox">
      <!-- HEADER -->
      <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
            <i class="fa fa-bars"></i>
          </a>
          <a href="index.html" class="navbar-brand">
            <img src="<?php echo base_url('assets/images/logo.png')?>" class="m-r-sm" alt="scale">
          </a>
          <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
            <i class="fa fa-cog"></i>
          </a>
        </div>
        <!-- MENU DROPDOW TOPO -->
        <ul class="nav navbar-nav hidden-xs">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="i i-grid"></i>
            </a>
            <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
              <div class="row m-l-none m-r-none m-t m-b text-center">
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-mail i-2x text-primary-lt"></i>
                      </span>
                      <small class="text-muted">Mailbox</small>
                    </a>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-calendar i-2x text-danger-lt"></i>
                      </span>
                      <small class="text-muted">Calendar</small>
                    </a>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-map i-2x text-success-lt"></i>
                      </span>
                      <small class="text-muted">Map</small>
                    </a>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-paperplane i-2x text-info-lt"></i>
                      </span>
                      <small class="text-muted">Trainning</small>
                    </a>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-images i-2x text-muted"></i>
                      </span>
                      <small class="text-muted">Photos</small>
                    </a>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="padder-v">
                    <a href="#">
                      <span class="m-b-xs block">
                        <i class="i i-clock i-2x text-warning-lter"></i>
                      </span>
                      <small class="text-muted">Timeline</small>
                    </a>
                  </div>
                </div>
              </div>
            </section>
          </li>
        </ul>
        <!-- FIM MENU DROPDOW TOPO -->
        <!-- PROFILE TOPO -->
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left">
                <img src="images/a0.png" alt="...">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">            
              <li>
                <span class="arrow top"></span>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
              </li>
            </ul>
          </li>
        </ul>  
        <!-- FIM PROFILE TOPO -->    
      </header>
      <section>
        <!-- FIM HEADER -->