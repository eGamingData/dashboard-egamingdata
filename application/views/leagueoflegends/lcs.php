<?php
$league = 'LCS';
$season = 'Summer 2020';
/** QUERY TO GET LAST UPDATE **/
$query = $this->db->query('SELECT * FROM lcs WHERE Team="Cloud9"');
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

 <!-- LCS Standings box ---------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lcs/general.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->
  <div class="row">
 <!-- LCS Drake box -------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lcs/drake.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->
   <!-- LCS Tower box ------------------------------------------------------------------------------------------------------------>
  <?php include 'datatables/lcs/tower.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->
  </div>

<!-- LCK KD box ------------------------------------------------------------------------------------------------------------------>
<div class="row">
     <!-- LCS KDA box ------------------------------------------------------------------------------------------------------------>
  <?php include 'datatables/lcs/kda.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->
   <!-- LCS GOLD box ------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lcs/gold.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->
  </div>
 <!-- LCS JUNGLE box ------------------------------------------------------------------------------------------------------------->
  <?php include 'datatables/lcs/jungle.php'; ?>
 <!------------------------------------------------------------------------------------------------------------------------------->  
</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#dataTable1').DataTable({
        "sDom": 't',
        "order": [[ 2, "desc" ]]
    });
  $('#dataTable2').DataTable({
        "sDom": 't'
    });
  $('#dataTable3').DataTable({
        "sDom": 't'
    });
  $('#dataTable4').DataTable({
        "sDom": 't'
    });
  $('#dataTable5').DataTable({
        "sDom": 't'
    });
  $('#dataTable6').DataTable({
        "sDom": 't'
    });
</script>