<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
     <span class="purple"><?php echo ($page->pagetitle)?></span> | <?php echo ($page->subpagetitle)?>
     <small> 
     <p> Last Updated: <?php echo $last_update->last_updated?></p>  
    </small>    
  </h1>
</section>

<!-- Main content -->
<section class="content">

   <?php include 'includes/table_general.php'; ?>


  <div class="row">
    <?php include 'includes/difference_ten.php'; ?>
    <?php include 'includes/kda.php'; ?>
  </div>


</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#general-table').DataTable({
    'dom': 'lftip',
    "fixedColumns": {
    "leftColumns": 1
  },
    "bAutoWidth": false,
    "scrollX": true,
    "fixedColumns" : true,
    "columnDefs": [
     { "width": "100px", "targets": "_all" }
    ]

    });

  $('#difference-ten').DataTable({
    'dom': 'lftip',
    "bAutoWidth": true,
    "scrollX": true

    });
  $('#kda-table').DataTable({
    'dom': 'lftip',
    "bAutoWidth": true,
    "scrollX": true

    });
</script>




<style type="text/css"> 
.dataTables_filter {
   float: right;
   text-align: right;
}
.dataTables_length{
  float: left;
   text-align: left;
}
</style>