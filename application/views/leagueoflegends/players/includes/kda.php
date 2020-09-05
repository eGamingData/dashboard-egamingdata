<div class="col-md-6">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="https://dashboard.egamingdata.com/assets/img/death-note.svg"> Kills/Deaths  </h3>


      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="kda-table" class="table table-bordered table-striped" width="100%">
        <thead>
          <tr>
            <th>Player</th>
            <th>Team</th>
            <th>Position</th>
            <th>GP</th>
            <th>K</th>
            <th>D</th>
            <th>A</th>
            <th>KDA</th>
            <th>KP</th>
            <th>KS</th>            
            <th>DTH</th>
            <th>FB</th>
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
                <?php echo $row->Pos ?>
              </td>
              <td>
                <?php echo $row->GP ?>
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
