<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="https://dashboard.egamingdata.com/assets/img/podium.svg"> Standings </h3>


      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="standings-table" class="table table-bordered table-striped">
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

          <?php foreach ($teams_data as $row): ?>
            <tr>
              <td>
                <img style="width: 3rem;margin-right: 2rem;" src="<?php echo $row->Image ?>">
                <?php echo $row->Team ?>
              </td>
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

  <script type="text/javascript">
  	 $('#standings').DataTable({
        "sDom": 't',
        "order": [[ 2, "desc" ]]
    });
  </script>