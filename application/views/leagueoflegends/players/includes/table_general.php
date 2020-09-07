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
      <table id="general-table" class="table table-bordered table-striped" width="100%">
        <thead>
          <tr>
          	<th title="Player">Player </th>
            <th title="Team">Team </th>
            <th title="Position">Position</th>
            <th title="Games Played">GP</th>
            <th title="Win %">Win</th>
            <th title="Counter Pick Rate %">CTR</th>
            <th title="Total Kills">K</th>
            <th title="Total Deaths">D</th>
            <th title="Total assists">A</th>
            <th title="Total Kill/Death/Assist ratio">KDA</th>
            <th title="Kill participation: percentage of team's kills in which player earned a Kill or Assist">KP</th>
            <th title="Kill share: player's percentage of their team's total kills">KS</th>            
            <th title="Average share of team’s deaths">DTH</th>
            <th title="First Blood rate, percent of games earning a First Blood participation (kill or assist)">FB</th>
            <th title="Average gold difference at 10 minutes">GD10</th>
            <th title="Average experience difference at 10 minutes">XPD10</th>
            <th title="Average creep score difference at 10 minutes">CSD10</th>
            <th title="Average monsters + minions killed per minute">CSPM</th>
            <th title="Average monsters + minions killed at 15 minutes">CSP15</th>
            <th title="Average damage to champions per minute">DPM</th>
            <th title="Damage Share: average share of team’s total damage to champions">DMG</th>
            <th title="Gold Share: average share of team’s total gold earned (excludes starting gold and inherent gold generation)">GOLD</th>
            <th title="Average wards placed per minute">WPM</th>
            <th title="Average wards cleared per minute">WPCM</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($players_data as $row): ?>
            <tr >
            	<td width="50px" >
                <?php echo $row->Player ?>
              </td>
              <td>
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
                <?php echo $row->W ?>
                
              </td>
              <td>
                <?php echo $row->CTR ?>
              </td>
              <td>
                <?php echo $row->K ?>
              </td>
              <td>
                <?php echo $row->D ?>
              </td>
              <td>
                <?php echo $row->A ?>
              </td>
              <td>
                <?php echo $row->KDA ?>
              </td>
              <td>
                <?php echo $row->KP ?>
              </td>
              <td>
                <?php echo $row->KS ?>
              </td>
              <td>
                <?php echo $row->DTH ?>
              </td>
              <td>
                <?php echo $row->FB ?>
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
              <td>
                <?php echo $row->DPM ?>
              </td>
              <td>
                <?php echo $row->DMG ?>
              </td>
              <td>
                <?php echo $row->GOLD ?>
              </td>
              <td>
                <?php echo $row->WPM ?>
              </td>
              <td>
                <?php echo $row->WCPM ?>
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
