<?php
$league = 'Pacific Championship Series';
$season = 'Summer 2020';

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
     <span class="purple"><?php echo $league ?></span> <?php echo $season ?> Data
      <small> 
     <p> | Last Updated: <?php echo $updated->Last_Updated ?></p>  
    </small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- LCK Standings box ---------------------------------------------------------------------------------------------------------->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/podium.svg"> Standings </h3>

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
            <th>Early Game Ratio</th>
            <th>Late Game Ratio</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($pcs as $row): ?>
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
                <?php echo $row->EGR ?>
              </td>
              <td>
                <?php echo $row->MLR ?>
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
<div class="row">
    <div class="col-md-6">
      <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/dragon-head.svg"> Drake Analytics </h3>

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
            <th>Team</th>
            <th>First Drake %</th>
            <th>Control Drake %</th>
            <th>Elder Drake %</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($pcs as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>
              <td>
                <?php echo $row->FD ?>
              </td>
              <td>
                <?php echo $row->DRG ?>
              </td>
              <td>
                <?php echo $row->ELD ?>
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
      
    </div>
    <!-- /.col -->
    <!-- LCK Tower box ----------------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-6">
      <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/tower-fall.svg"> Towers Analytics </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable3" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>

            <th>First Tower %</th>
            <th>First 3 Towers %</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($pcs as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>

              <td>
                <?php echo $row->FT ?>
              </td>
              <td>
                <?php echo $row->F3T ?>
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

      
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>

<!-- LCK KD box ----------------------------------------------------------------------------------------------------------------------------->
<div class="row">
    <div class="col-md-6">
      <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/death-note.svg"> Kill/Death Analytics </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable4" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>
            <th>Total Kills</th>
            <th>Total Deaths</th>
            <th>Kill/Death Ratio</th>
            <th>First Blood Ratio</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($pcs as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>
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
                <?php echo $row->FB ?>
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
 
    </div>
<!-- LCK Gold box ----------------------------------------------------------------------------------------------------------------------------->
    <!-- /.col -->
    <div class="col-md-6">
      <div class="box">
    <div class="box-header with-border">
     <h3 class="box-title"><img class="icon" src="assets/img/two-coins.svg">  Gold Analytics </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable5" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>
            <th>Gold % Rating</th>
            <th>Avg. Gold Spent Difference</th>
            <th>Avg. Gold Difference at 15'</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($pcs as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>

              <td>
                <?php echo $row->GPR ?>
              </td>
              <td>
                <?php
                 echo $row->GSPD ?>
              </td>
              <td>
                <?php
                 echo $row->GD15 ?>
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

      
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
<!-- LCK Jungle box ----------------------------------------------------------------------------------------------------------------------------->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/tree-branch.svg"> Jungle Analytics </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable6" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>
            <th>First Drake %</th>
            <th>Control Drake %</th>
            <th>Elder Drake %</th>
            <th>First Baron %</th>
            <th>Baron Control %</th>
            <th>Jungle Global Control %</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pcs as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>

              <td>
                <?php echo $row->FD ?>
              </td>
              <td>
                <?php
                 echo $row->DRG ?>
              </td>
              <td>
                <?php
                 echo $row->ELD ?>
              </td>
              <td>
                <?php
                 echo $row->FBN ?>
              </td>
              <td>
                <?php
                 echo $row->BN ?>
              </td>
              <td>
                <?php
                 echo $row->JNG ?>
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