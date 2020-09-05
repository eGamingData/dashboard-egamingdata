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
          	<th>Player</th>
            <th>Team</th>
            <th>Position</th>
            <th>GP</th>
            <th>Win</th>
            <th>CTR</th>
            <th>K</th>
            <th>D</th>
            <th>A</th>
            <th>KDA</th>
            <th>KP</th>
            <th>KS</th>            
            <th>DTH</th>
            <th>FB</th>
            <th>GD10</th>
            <th>XPD10</th>
            <th>CSD10</th>
            <th>CSPM</th>
            <th>CSP15</th>
            <th>DPM</th>
            <th>DMG</th>
            <th>GOLD</th>
            <th>WPM</th>
            <th>WPCM</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($players_data as $row): ?>
            <tr >
            	<td >
                <?php echo $row->Player ?>
              </td>
              <td>
                <?php echo $row->Team ?>
              </td>
               <td>
                <?php echo $row->Pos ?>
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
