<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


<script type="text/javascript">
  twttr.widgets.createTimeline(
  {
    sourceType: "profile",
    screenName: "TwitterDev",
    theme: "dark",
    height: "100px"
  },
 
);
</script>

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
  <div class="col-sm-8"><iframe style=" border-radius: 5px;"width="100%" height="500rem" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="col-sm-4 twitter-box">
    <a class="twitter-timeline"
  href="https://twitter.com/egamingdata"
  data-height="50rem">
Tweets by @eGamingData
</a>
    
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
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua lol-box">
        <div class="inner">
          <h3>League of Legends</h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="#" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green darts-box">
        <div class="inner">
          <h3>Darts<sup style="font-size: 20px"></h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="#" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow dota-box">
        <div class="inner">
          <h3>Dota</h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="#" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red csgo-box">
        <div class="inner">
          <h3>CS:GO</h3>
          <p>Last update:</p>
        </div>
        <div class="icon">
        </div>
        <a href="#" class="small-box-footer">         
          <p>Browse data <i class="fa fa-arrow-circle-right"></i></p> 
        </a>
      </div>
    </div>
    <!-- ./col -->
  </div>
</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>