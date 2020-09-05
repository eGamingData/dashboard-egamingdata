<?php
$league = 'League of Legends';

/** QUERY TO GET LAST UPDATE **/
$query = $this->db->query('SELECT * FROM pcs WHERE Team="Alpha Esports"');
$res = $query->result();  // this returns an object of all results
$updated = $res[0]; 
/******************************/
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

  <?php include 'includes/table_champions_general.php'; ?>

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#general-champions-table').DataTable({
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