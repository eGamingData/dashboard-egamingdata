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

          <?php foreach ($lec as $row): ?>
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