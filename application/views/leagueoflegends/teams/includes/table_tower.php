<div class="col-md-6">
      <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="https://dashboard.egamingdata.com/assets/img/tower-fall.svg"> Towers Analytics </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="tower-table" class="table table-bordered table-striped" width="100%">
        <thead>
          <tr>
            <th>Team</th>

            <th>First Tower %</th>
            <th>First 3 Towers %</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($teams_data as $row): ?>
            <tr>
              <td>
                <img style="width: 3rem;margin-right: 2rem;" src="<?php echo $row->Image ?>">
                <?php echo $row->Team ?>                
              </td>              
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

 <script type="text/javascript">
 	$('#tower-table').DataTable({
        "sDom": 't'
    });
 </script>