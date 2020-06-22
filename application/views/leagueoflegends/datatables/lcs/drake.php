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

          <?php foreach ($lcs as $row): ?>
            <tr>
              <td><?php echo $row->Team ?></td>
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