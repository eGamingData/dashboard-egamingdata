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

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#general-table').DataTable({

    });
</script>