<?php
$league = 'LEC';
$season = 'Summer 2020';

/** QUERY TO GET LAST UPDATE **/
$query = $this->db->query('SELECT * FROM lec WHERE Team="Fnatic"');
$res = $query->result();  // this returns an object of all results
$updated = $res[0]; 
/******************************/

defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <span class="purple"><?php echo $league ?></span> <?php echo $season ?> Data
    <small> 
     <p> | Last Updated: <?php echo $updated->Last_Updated ?></p>  
    </small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- LEC Standings box ---------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/general.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->

<div class="row">
  <!-- LEC Drake box -------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/drake.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  <!-- LEC Tower box -------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/tower.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->  
</div>

<div class="row">
  <!-- LEC KDA box ---------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/kda.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  <!-- LEC GOLD box --------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/gold.php'; ?>
  <!-------------------------------------------------------------------------------------------------------------------------------> 
</div>

<!-- LEC JUNGLE box --------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lec/jungle.php'; ?>
<!---------------------------------------------------------------------------------------------------------------------------------> 

</section>

<?php include viewPath('includes/footer'); ?>

<script>
  $('#dataTable1').DataTable()
  $('#dataTable2').DataTable()
  $('#dataTable3').DataTable();
  $('#dataTable4').DataTable();
  $('#dataTable5').DataTable();
  $('#dataTable6').DataTable();
</script>