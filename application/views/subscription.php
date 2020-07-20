<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    eGaming<span class="purple">Data</span> - Subscriptions
    <small>esports data for betting purpouses.</small>
  </h1>
  <span class="pull-right-container">
      
    </span>
</section>

<!-- Main content -->
<section class="content">
<div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Trial</h5>
            <h6 class="card-price text-center">$0<span class="period">/3 days</span></h6>
            <hr class="separator">
            <ul style="margin-left: 5rem;" class="fa-ul card-content">
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">Unlimited</a> data</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">All games</a> available</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">All leagues</a> available</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Betting <a class="purple">tracker</a></li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Betting <a class="purple">AI Predictions</a></li>
            </ul>
          
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h1 class="card-title text-muted text-uppercase text-center">Plus</h1>
            <h6 class="card-price text-center">$24,99<span class="period">/month</span></h6>
            <hr class="separator">
            <ul style="margin-left: 5rem;" class="fa-ul card-content">
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">Unlimited</a> data</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">All games</a> available</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span><a class="purple">All leagues</a> available</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Betting <a class="purple">tracker</a></li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Betting <a class="purple">AI Predictions</a></li>
            </ul>
            <div style="margin-top: 4.5rem;" id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AVlMzWmlaRkruG9Jfqauu3uggl4SgAHPvx2h61vtZCZqZENbE6IWLDXc25JpK5mBpHTxl1a7raL6c6X8&vault=true" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'black',
          layout: 'vertical',
          label: 'subscribe',
          
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': 'P-9V016359779468702L4JQ2LY'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID);
      }
  }).render('#paypal-button-container');
</script>
          </div>
        </div>
      </div>      
    </div>
  </div>
</section>
<!-- /.content -->

<style type="text/css">
	
</style>

<?php include viewPath('includes/footer'); ?>