<?php
$league = 'Betting Tracker';

defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
    .box .box-header {
    padding: 28px !important;
    }
</style>
<?php 

include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->

<section class="content-header">
  <h1>
   Betting <span class="purple"><?php echo " Tracker" ?></span> 
  </h1>
</section>



<!-- Main content -->
<section class="content">
  <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> Information!</h4>
           Betting tracker features is under active development and may change in the future, all data inserted will remain on our database even if we add new features to the tracker. If you would like to delete all your records please send an email to support@egamingdata.com with the subject "Tracker removal" and we will manually delete all your betting history.
  </div>

  <div class="row">
      <div class="col-sm-2">
        <!-- small box -->
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
            <h2>Total <sapan class="purple"></span> bets</h2>
            <h4><?php echo ($total_bets)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
            <h2>Bets <sapan class="purple"></span> won</h2>
            <h4><?php echo ($bets_won)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
            <h2>Win<sapan class="purple"></span> %</h2>
             <h4><?php echo ($win_perc)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-sm-2">
        <!-- small box -->
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
            <h2>Total <sapan class="purple"></span> profit</h2>
            <h4><?php echo ($total_profit)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
           <h2>Bets <sapan class="purple"></span> lost</h2>
             <h4><?php echo ($bets_lost)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
        <div class="small-box bg-aqua bet-tracker-box">
          <div class="inner">
            <h2>Avg. <sapan class="purple"></span> bet outcome</h2>
            <h4><?php echo ($avg_bet_profit)?></h4>
          </div>
          <div class="icon">
          </div>         
        </div>
      </div>
      <!-- ./col -->
      <div class="col-sm-8">
        <!-- small box -->
        <div class="small-box bg-yellow bet-tracker-box">
          <div style="width:75%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="canvas" style="display: block; width: 1217px; height: 345px;" width="1217" height="500" class="chartjs-render-monitor"></canvas>
  </div>
         <div class="chart">
            

          </div>
        </div>
      </div>
      <!-- ./col -->
  </div>

<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><img class="icon" src="assets/img/podium.svg"> Betting history </h3>
      <div class="box-tools pull-right">
        <button type="button" onclick="add_tracker();" class="btn btn-success">
         Add bet</button>
      </div>

    </div>
    <div class="box-body">
      <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th> Date </th>
            <th>Event</th>
            <th>Bet type </th>
            <th>Selection</th>
            <th>Stake</th>
             <th>Odds </th>
            <th>Out Come</th>            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach($result as $res){
        ?>
        <tr>
          <td><?php echo date('M d, Y',strtotime($res->date)); ?></td>
            <td><?php echo $res->event; ?></td>
             <td><?php echo $res->bet_type; ?></td>
             <td><?php echo $res->selection; ?></td>
             <td><?php echo $res->stake; ?></td>
             <td><?php echo $res->odds; ?></td>
             <td><?php echo $res->outcome; ?></td>              
               <td><i class="fa fa-edit" onclick="edit_tracker('<?php echo $res->id; ?>','<?php echo $res->event; ?>','<?php echo $res->bet_type; ?>','<?php echo $res->selection; ?>','<?php echo $res->stake; ?>','<?php echo $res->odds; ?>','<?php echo $res->outcome; ?>','<?php echo $res->date; ?>')"></i>&nbsp; &nbsp;<i class="fa fa-remove" onclick="remove_tracker('<?php echo $res->id; ?>')"></i></td>
        </tr>
         
         <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
    <!-- /.box-footer-->
  </div>


 


</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add bet</h4>
      </div>
      <div class="modal-body">
<form method="post" id="tacker_id" action="<?php echo base_url('tracker');?>">
    
    <?php
        $csrf = array(
           'name' => $this->security->get_csrf_token_name(),
           'hash' => $this->security->get_csrf_hash()
        );
    ?>
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    
    <div class="row">
        <div class="col-sm-6">
             <div class="form-group">
    <label for="exampleInputEmail1">Event</label>
    <input type="text" class="form-control" id="event" name="event" placeholder="Enter Event">
   </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
    <label for="exampleInputEmail1">Bet Type</label>
    <input type="text" class="form-control" id="bet_type" name="bet_type" placeholder="Enter Bet type">
   </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-sm-6">
             <div class="form-group">
    <label for="exampleInputEmail1">Selection</label>
    <input type="text" class="form-control" id="selection" name="selection" placeholder="Enter selection">
   </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
    <label for="exampleInputEmail1">Stake</label>
    <input type="number" step="0.01" class="form-control" id="stack" name="stack" placeholder="Enter stack">
   </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-sm-6">
             <div class="form-group"> 
    <label for="exampleInputEmail1">Odds</label>
    <input type="number" step="0.01" class="form-control" id="odds" name="odds" placeholder="Enter odds">
   </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
    <label for="exampleInputEmail1">Out Come</label>
    <input type="number" step="0.01" class="form-control" id="out_come" name="out_come" placeholder="Enter Out come">
   </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Enter bet date">
   </div>
        </div>
    </div>


  <button type="submit" id="sbt-button" class="btn btn-primary">Submit</button>
</form>
      </div>
     
    </div>

  </div>
</div>

<!-- Modal End -->

<form method="post" id="id_submit" action="<?php echo base_url('tracker/tracker_delete'); ?>" style="display:none">
    <input type="text" name="id_val" id="id_val"> 
    
    <?php
        $csrf = array(
           'name' => $this->security->get_csrf_token_name(),
           'hash' => $this->security->get_csrf_hash()
        );
    ?>
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
     
</form>

<?php include viewPath('includes/footer'); ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

/*$.ajax({
        url: "<?php echo base_url(); ?>index.php/tracker",
        type: 'POST',
        success: function(res) {
            console.log(res);
            alert(res);
        }
    }); */
    
    
function add_tracker(){
    $("#date").val("");
     $("#event").val("");
      $("#bet_type").val("");
       $("#selection").val("");
        $("#stack").val("");
         $("#odds").val("");
         $("#out_come").val("");
     $(".modal-title").text("Add bet");
     $("#tacker_id").attr('action', '<?php echo base_url('tracker');?>');
     $("#sbt-button").text("Submit");
$('#myModal').modal('show');
}

  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable({
        "sDom": 't'
    });
  $('#dataTable3').DataTable({
        "sDom": 't'
    });
  $('#dataTable4').DataTable({
        "sDom": 't'
    });
  $('#dataTable5').DataTable({
        "sDom": 't'
    });
  $('#dataTable6').DataTable({
        "sDom": 't'
    });
    
    
    function remove_tracker(id){
       
       swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      $("#id_val").val(id);
      $("#id_submit").submit();
  } else {
    swal("Cancelled");
  }
});
       
    }
    
    
    function edit_tracker(id,event,bet_type,selection,stake,odds,outcome,date){
    $("#tacker_id").attr('action', '<?php echo base_url('tracker/update');?>');
    $(".modal-title").text("Edit Tracker");
     $("#date").val(date);
    $("#event").val(bet_type);
      $("#bet_type").val(event);
       $("#selection").val(selection);
        $("#stack").val(stake);
         $("#odds").val(odds);
         $("#out_come").val(outcome);
         $("#sbt-button").text("Update");
    $("#tacker_id").append('<input type="hidden" name="id" value="'+id+'">');
    $('#myModal').modal('show');
    }
</script>

<script type="application/javascript" src="https://cdn.mfilter.tk/js/mfilter.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.mfilter.tk/css/mfilter.min.css">

