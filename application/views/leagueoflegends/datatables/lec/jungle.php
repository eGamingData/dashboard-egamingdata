<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/tree-branch.svg"> Jungle Analytics </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable6" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Team</th>
            <th>First Drake %</th>
            <th>Control Drake %</th>
            <th>Elder Drake %</th>
            <th>First Baron %</th>
            <th>Baron Control %</th>
            <th>Jungle Global Control %</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($lec as $row): ?>
            <tr>
              <td><?php echo $row->Image ?><?php echo $row->Team ?></td>

              <td>
                <?php echo $row->FD ?>
              </td>
              <td>
                <?php
                 echo $row->DRG ?>
              </td>
              <td>
                <?php
                 echo $row->ELD ?>
              </td>
              <td>
                <?php
                 echo $row->FBN ?>
              </td>
              <td>
                <?php
                 echo $row->BN ?>
              </td>
              <td>
                <?php
                 echo $row->JNG ?>
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