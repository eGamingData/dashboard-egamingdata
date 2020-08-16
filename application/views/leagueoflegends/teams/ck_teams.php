<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
     <span class="purple"><?php echo ($page->pagetitle)?></span> | <?php echo ($page->subpagetitle)?>
      <small> 
     <p> Last Updated: <?php echo $last_update->Last_Updated?></p>  
    </small>  
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <?php include 'includes/table_standings.php'; ?>

  <div class="row">
    <?php include 'includes/table_drake.php'; ?>
    <?php include 'includes/table_tower.php'; ?>
  </div>

  <div class="row">
  <?php include 'includes/table_kda.php'; ?>
  <?php include 'includes/table_gold.php'; ?>
  </div>

  <?php include 'includes/table_jungle.php'; ?>

 <!------------------------------------------------------------------------------------------------------------------------------->  
</section>
  
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>  
  $('#tower-table').DataTable({
        "sDom": 't'
    });  
  $('#drake-table').DataTable({
        "sDom": 't'
    });
  $('#standings-table').DataTable({
        "sDom": 't'
    });
  $('#jungle-table').DataTable({
        "sDom": 't'
    });
  $('#gold-table').DataTable({
        "sDom": 't'
    });
  $('#kda-table').DataTable({
        "sDom": 't'
    });
</script>