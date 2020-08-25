<?php
/******************************/
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
     <span class="purple">League of Legends</span> Data<small> 
    
  </h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <?php include 'includes/leagues_overview.php'; ?>
      <!-- /.widget-user -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
      
      <!-- /.widget-user -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
      
      <!-- /.widget-user -->
    </div>
    <!-- /.col -->
  </div>

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#general-table').DataTable({
        "sDom": 't',
        "order": [[ 2, "desc" ]]
    }); 
</script>