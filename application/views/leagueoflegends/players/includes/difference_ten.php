<div class="col-md-6">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="https://dashboard.egamingdata.com/assets/img/alarm-clock.svg"> Difference at min.</h3>


      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="difference-ten" class="table table-bordered table-striped" width="100%">
        <thead>
          <tr>
          	<th>Player</th>
            <th>Team</th>
            <th>Position</th>
            <th>GP</th>
            <th>GD10</th>
            <th>XPD10</th>
            <th>CSD10</th>
            <th>CSPM</th>
            <th>CSP15</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($players_data as $row): ?>
            <tr>
            	<td>
                <?php echo $row->Player ?>
              </td>
              <td>>
                <?php echo $row->Team ?>
              </td>
               <td>
                <?php
                if ( $row->Pos == 'Top') {
                    echo "<center><img style='width:30% !important;margin-right: 5px;' src='https://egamingdata.com/assets/icons/Toprole_icon.png'></img></center>";
                    echo "<span style='visibility:hidden;'>Top</span>";
                  } elseif ($row->Pos == 'ADC') {
                    echo "<center><img style='width:30% !important;margin-right: 5px;' src='https://egamingdata.com/assets/icons/AD_Carryrole_icon.png'></img></center>";
                    echo "<span style='visibility:hidden;'>Adc</span>";
                  } elseif ($row->Pos == 'Middle') {
                    echo "<center><img style='width:30% !important;margin-right: 5px;' src='https://egamingdata.com/assets/icons/Midrole_icon.png'></img></center>";
                    echo "<span style='visibility:hidden;'>Mid</span>";
                  } elseif ($row->Pos == 'Support') {
                    echo "<center><img style='width:30% !important;margin-right: 5px;' src='https://egamingdata.com/assets/icons/Supportrole_icon.png'></img></center>";
                    echo "<span style='visibility:hidden;'>Supp</span>";
                  } elseif ($row->Pos == 'Jungle') {
                    echo "<center><img style='width:30% !important;margin-right: 5px;' src='https://egamingdata.com/assets/icons/Junglerole_icon.png'></img></center>";
                    echo "<span style='visibility:hidden;'>Jung</span>";
                  }
                 ?>
              </td>
              <td>
                <?php echo $row->GP ?>
              </td>              
              <td>
                <?php echo $row->GD10 ?>
              </td>
              <td>
                <?php echo $row->XPD10 ?>
              </td>
              <td>
                <?php echo $row->CSD10 ?>
              </td>
              <td>
                <?php echo $row->CSPM ?>
              </td>
              <td>
                <?php echo $row->CSP15 ?>
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
</div>
