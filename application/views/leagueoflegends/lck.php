<?php
$league = 'LCK';
$season = 'Summer 2020';

/** QUERY TO GET LAST UPDATE **/
$query = $this->db->query('SELECT * FROM lck WHERE Team="T1"');
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

  <!-- LCK Standings box ---------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/general.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->

  <div class="row">
  <!-- LCK Drake box -------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/drake.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  <!-- LCK Tower box -------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/tower.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  </div>

  <div class="row">
  <!-- LCK KD box ----------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/kda.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  <!-- LCK GOLD box --------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/gold.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->
  </div>

  <!-- LCK JUNGLE box ------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lck/jungle.php'; ?>
  <!------------------------------------------------------------------------------------------------------------------------------->

</section>

<!-- FOOTER ----------------------------------------------------------------------------------------------------------------------->
<?php include viewPath('includes/footer'); ?>


<script>
  $('#dataTable1').DataTable()
  $('#dataTable2').DataTable()
  $('#dataTable3').DataTable();
  $('#dataTable4').DataTable();
  $('#dataTable5').DataTable();
  $('#dataTable6').DataTable();
</script>