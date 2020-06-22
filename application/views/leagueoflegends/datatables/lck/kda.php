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

          <?php foreach ($lck as $row): ?>
            <tr>
              <td><?php echo $row->Team ?></td>
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