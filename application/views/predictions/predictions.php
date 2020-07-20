<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <span class="purple">Global AI</span> Predictions
    <small>| esports data for betting purpouses.</small>
  </h1>
  <span class="pull-right-container">
      
    </span>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/server-rack.svg"> Predictions </h3>

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
            <th>League</th>
            <th>Bet</th>
            <th>Team One</th>
            <th>Team One %</th>
            <th>Tie</th>
            <th>Team Two</th>
            <th>Team Two %</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($predictions as $row): ?>
            <tr>
              <td><?php echo $row->league ?></td>
              <td>
                <?php echo $row->mo_type ?>
              </td>
              <td>
                <?php echo $row->team_one ?>
              </td>
              <td>
                <?php echo $row->result_team_one ?>
              </td>
               <td>
                <?php echo $row->result_tie?>
              </td>
              <td>
                <?php echo $row->team_two ?>
              </td>
              <td>
                <?php echo $row->result_team_two ?>
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
  $('#dataTable1').DataTable(); 
</script>

