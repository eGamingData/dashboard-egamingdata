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
     <span class="purple"><?php echo $league ?></span> Data      <small> 
    
  </h1>
</section>

<!-- Main content -->
<section class="content">

  

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#dataTable1').DataTable({
        "sDom": 't',
        "order": [[ 2, "desc" ]],
        "scrollX": true
    });
  $('#dataTable2').DataTable({
        "sDom": 't',
        "scrollX": true
    });
  $('#dataTable3').DataTable({
        "sDom": 't',
        "scrollX": true
    });
  $('#dataTable4').DataTable({
        "sDom": 't',
        "scrollX": true
    });
  $('#dataTable5').DataTable({
        "sDom": 't',
        "scrollX": true
    });
  $('#dataTable6').DataTable({
        "sDom": 't',
        "scrollX": true
    });
</script>