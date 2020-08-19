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


</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#general-table').DataTable({
        "sDom": 't',
        "order": [[ 2, "desc" ]]
    }); 
</script>