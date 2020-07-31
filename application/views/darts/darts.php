<?php
$league = 'Darts';
$season = '2020';

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
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/podium.svg"> 180s Ranking</h3>

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
            <th>Rank</th>
            <th>Player</th>
            <th>Country</th>
            <th>180s</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($darts as $row): ?>
            <tr>
              <td><?php echo $row->rank ?></td>
              <td>
                <?php echo $row->player ?>
              </td>
              <td>
                <?php echo $row->country ?>
              </td>
              <td>
                <?php echo $row->hundreds ?>
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

  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/podium.svg"> Win Percentage Ranking</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable2" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Rank</th>
            <th>Player</th>
            <th>Country</th>
            <th>Matches</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Percentage</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($darts_w as $row): ?>
            <tr>
              <td><?php echo $row->rank ?></td>
              <td>
                <?php echo $row->player ?>
              </td>
              <td>
                <?php echo $row->country ?>
              </td>
              <td>
                <?php echo $row->matches ?>
              </td>
              <td>
                <?php echo $row->wins ?>
              </td>
              <td>
                <?php echo $row->losses ?>
              </td>
              <td>
                <?php echo $row->percentage ?>
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


 


</section>

<?php include viewPath('includes/footer'); ?>

<script>
  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable();
</script>

<script type="application/javascript" src="https://cdn.mfilter.tk/js/mfilter.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.mfilter.tk/css/mfilter.min.css">