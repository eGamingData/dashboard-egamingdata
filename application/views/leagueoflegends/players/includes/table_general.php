<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="https://dashboard.egamingdata.com/assets/img/podium.svg"> General </h3>


      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="general-table" class="table table-bordered table-striped">
        <thead>
          <tr>
          	<th>Player</th>
            <th>Team</th>
            <th>Games Played</th>
            <th>Position</th>
            <th>CTR</th>
            <th>KDA</th>
            <th>Kill participation</th>
            <th>Gold diff. min. 10</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($players_data as $row): ?>
            <tr>
            	<td>
                <?php echo $row->Player ?>
              </td>
              <td>
                <?php echo $row->Team ?>
              </td>
               <td>
                <?php echo $row->GP ?>
              </td>
              <td>
                <?php echo $row->Pos ?>
              </td>
              <td>
                <?php echo $row->CTR ?>
              </td>
              <td>
                <?php echo $row->KDA ?>
              </td>
              <td>
                <?php echo $row->KP ?>
              </td>
              <td>
                <?php echo $row->GD10 ?>
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
