<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>




<!-- Content Header (Page header)  -->
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

  <div class="row">
  <div class="col-sm-8"><iframe style=" border-radius: 5px;"width="100%" height="500rem" src="https://www.youtube.com/embed/EgwFqa0gmeQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
 <div class="col-sm-4">
        <!-- small box -->
        <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-star fa-lg purple" aria-hidden="true" style="margin-right: 10px"></i>Bookmarks </h3>
      <div class="box-tools pull-right">
        <button type="button" onclick="add_tracker();" class="btn btn-success">
          <i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>

    </div>
    <div class="box-body" style="height: 420px">
      <table id="dataTable1" class="table table-bordered table-striped">
        <tbody>        
        <!--<tr style="w">
          <td>League Championship Series Academy</td>
          <td><span class="pull-right badge bg-yellow"><i class="fa fa-star" aria-hidden="true"></i></span></td>                
        </tr>
        <tr>
          <td>League Championship Korea</td>
          <td><span class="pull-right badge bg-blue"><i class="fa fa-star" aria-hidden="true"></i></span></td>                
        </tr>
        <tr>
          <td>League European Championship</td>
          <td><span class="pull-right badge bg-green"><i class="fa fa-star" aria-hidden="true"></i></span></td>                
        </tr>-->
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
    <!-- /.box-footer-->
  </div>
      </div>
</div>
<section class="content-header no-margin-left">
  <h1>
    Explore our <span class="purple">data</span> 
  </h1> 
  <span class="pull-right-container">
      
    </span>
</section>
  <!-- Default box -->
  <div class="row">
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua lol-box">
        <div class="inner">
          <h3>League of Legends</h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="/league-of-legends/teams/lec" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green darts-box">
        <div class="inner">
          <h3>Darts<sup style="font-size: 20px"></h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="/darts" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow fantasy-box">
        <div class="inner">
          <h3>LoL: Fantasy</h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="/league-of-legends/players/lec" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    
    <!-- ./col -->
  </div>
</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>