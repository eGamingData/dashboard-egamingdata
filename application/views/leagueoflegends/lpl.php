<?php
$league = 'LPL';
$season = 'Summer 2020';

/** QUERY TO GET LAST UPDATE **/
$query = $this->db->query('SELECT * FROM lpl WHERE Team="eStar"');
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

	<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> Note!</h4>
            Statistics for the LPL are limited due to reduced data access. Some deeper metrics may exclude a small number of games due to gaps in available data.
          </div>

  <!-- LPL Standings box ---------------------------------------------------------------------------------------------------------->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/podium.svg"> General Data </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>
            <th>Games Played</th>
            <th>Win</th>
            <th>Lose</th>
            <th>Average Game Time</th>
            <th>Kills</th>
            <th>Deaths</th>
            <th>Kill/Death Ratio</th>
            <th>Combined Kills per min.</th>
            <th>Dragon Control %</th>
            <th>Baron Control %</th>
            <th>Jungle Control %</th>
            <th>Wards placed per min.</th>
            <th>Wards cleared per min.</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($lpl as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>
              <td>
                <?php echo $row->GP ?>
              </td>
              <td>
                <?php echo $row->W ?>
              </td>
              <td>
                <?php echo $row->L ?>
              </td>
              <td>
                <?php echo $row->AGT ?>
              </td>
              <td>
                <?php echo $row->K ?>
              </td>
               <td>
                <?php echo $row->D ?>
              </td>
               <td>
                <?php echo $row->KD ?>
              </td>
               <td>
                <?php echo $row->CKPM ?>
              </td>
               <td>
                <?php echo $row->DRG ?>
              </td>
              <td>
                <?php echo $row->BN ?>
              </td>
              <td>
                <?php echo $row->JNG ?>
              </td>
              <td>
                <?php echo $row->WPM ?>
              </td>
              <td>
                <?php echo $row->WCPM ?>
              </td>

            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
<!-- LCK Drake box ----------------------------------------------------------------------------------------------------------------------------->




</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>

<script>
  $('#dataTable1').DataTable();

</script>