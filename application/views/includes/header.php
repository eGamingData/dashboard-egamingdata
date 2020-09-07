<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?php echo $page->title ?> | <?php echo $app->site_title ?> </title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177388584-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-177388584-1');
  </script>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/Ionicons/css/ionicons.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net/export/buttons.bootstrap.min.css" />
  
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css" />

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
  
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />

  <?php if(function_exists('styles_header')) styles_header($url) ?>

  <!-- Switchery  -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.css">
  
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Uncomment the below code if you want to use official AdminLte Theme -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/AdminLTE.min.css"> -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets//css/app.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>assets//css/stylesheet.css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>assets//js/predictions.js" />
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url() ?>assets/js/jquery/jquery.min.js"></script>

  <!-- CanvasJS -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url() ?>assets/plugins/jqueryUi/jquery-ui.min.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
  </script>

  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>

  <!-- FastClick -->
  <script src="<?php echo base_url() ?>assets/plugins/fastclick/lib/fastclick.js"></script>

  <!-- Fixed columns datatables -->
  <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script>

  <script>
  window.announcekit = (window.announcekit || { queue: [], on: function(n, x) { window.announcekit.queue.push([n, x]); }, push: function(x) { window.announcekit.queue.push(x); } });
  window.announcekit.push({
    "widget": "https://announcekit.app/widgets/v2/2OTEC4",
    "selector": ".announcekit-widget"
  })
</script>
<script async src="https://cdn.announcekit.app/widget-v2.js"></script>


  <style>
    .img-avtar{
      border-radius: 50%;
    }

    div.dataTables_wrapper div.dataTables_filter{

      text-align: left;

    }
  </style>


</head>
<body class="hold-transition skin-custom sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo url('/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="https://egamingdata.com/assets/images/e_logo.png" width="80%" ></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="https://egamingdata.com/assets/images/logo.png" class="logo-fl" alt="Logo" style="max-width: 20rem;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu no-drop-border">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="<?php echo userProfile(logged('id')) ?>" class="user-image" alt="User Image">-->
              <i class="fa fa-user fa-lg" aria-hidden="true"></i>
              <span class="hidden-xs"><?php echo logged('name') ?></span>
            </a>
            <ul class="dropdown-menu no-drop-border">
              <!-- User image -->
              <li class="user-header">
                <!--<img src="<?php echo userProfile(logged('id')) ?>" class="img-circle" alt="User Image"> -->
                 <i class="fa fa-user fa-5x" aria-hidden="true" style="color: white; margin-top: 5px;"></i>

                <p>
                  <?php echo logged('name') ?>
                  <small>Member since <?php echo date('M. Y', strtotime(logged('created_at'))) ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-body">
                <div class="pull-left">
                  <a href="<?php echo url('profile') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo url('/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!--<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo userProfile(logged('id')) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo logged('name') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form" autocomplete="off">
        <div class="input-group">
          <input type="text" name="q" class="form-control search-menu-box" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php include 'nav.php' ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php include 'notifications.php'; ?>