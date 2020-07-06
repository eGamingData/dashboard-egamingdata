<?php
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=146.148.2.232;dbname=egamingdata;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        'Qwertyuiop7*', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare('SELECT team_one,result_team_one, result_tie, team_two, result_team_two, tie_label, data_event FROM lol_models WHERE mo_type="mo_fd" '); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);

	 $i = 0;
	 $datapoints = [];

	 foreach($result as $row){
	 	$arrayName = "datapoint".$i."";
	 	$$arrayName = [];
	 	$i += 1;
	 	array_push($datapoints, $$arrayName);
	 }

	$i = 0;
	
    foreach($result as $row){
    	$tie = 'tie';
         array_push($datapoints[$i], array("y"=>substr(($row->result_team_one * 1000), 0, -1), "label"=> $row->team_one));         

        array_push($datapoints[$i], array("y"=>substr(($row->result_team_two * 1000), 0, -1), "label"=> $row->team_two));
       
        //array_push($datapoints[$i], array("y"=>substr(($row->result_tie * 1000), 0, -1), "label"=> $row->tie_label));
         

         $i += 1;
    }

	$link = null;
}

catch(\PDOException $ex){
    print($ex->getMessage());
}

?>

<script type="text/javascript">
	
function loadfdChart(){

	var fddatapoints = <?php echo json_encode($datapoints ); ?>;

		var arrayLength = fddatapoints.length;

		for (var i = 0; i < arrayLength; i++) {
		    console.log(fddatapoints[i]);
		    var id = 'mofd' + i

		    var chart = new CanvasJS.Chart(id, {
		    colorSet: "greenShades",
		    animationEnabled: true,
		    exportEnabled: false,
		    animationDuration: 1000,
		    dataPointWidth: 30,
		    width: 500,
		    exportFileName: "eGamingData_LEC_First_Drake",
		    theme: "light1", // "light1", "light2", "dark1", "dark2"
		    title:{
		        text: "First Drake %",
		        fontSize: 20,
		        fontFamily: "arboria-bolduploaded_file",
		        fontWeight: "bold",
		        margin: 25,
		        padding: 4,
		    },

		    axisY:{
		      maximum: 100,
		      labelFontFamily: "arboria-bolduploaded_file",
		      labelFontSize: 15,
		     },
		    axisX:{
		      labelFontFamily: "arboria-bolduploaded_file",
		      labelFontSize: 15,
		      margin: 30
		     },
		     legend: {
       			verticalAlign: "top"  // "top" , "bottom"
     		},
		    data: [{
		        type: "pie",
		        barThickness: 15,
		        percentFormatString: "#0#.#",
		        yValueFormatString:"##.#",
		        indexLabelFontFamily: "arboria-bolduploaded_file",
		        indexLabelFontColor: "#ffff",
		        showInLegend: true,
		        legendText: "{label}",
		        indexLabelPlacement: "inside",
		        dataPoints: fddatapoints[i]
		    }]
		});

		chart.render();
		console.log('First Tower Chart '+ i + " created...");
		    
		}

}

</script>