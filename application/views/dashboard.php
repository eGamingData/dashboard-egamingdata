<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    eGaming<span class="purple">Data</span> - Home
    <small>esports data for betting purpouses.</small>
  </h1>
  <span class="pull-right-container">
      
    </span>
</section>

<!-- Main content -->
<section class="content">

  <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> Information!</h4>
           eGamingData is under an early phase of development. Service interruptions may occur from time to time.
  </div>
  <!-- Default box -->
  <div class="box">
    <div class="box-body-nomargin">
      <embed src="https://www.esportscalendar.com" style="width: 100%; height: 650px;">
    </div>

  </div>

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>