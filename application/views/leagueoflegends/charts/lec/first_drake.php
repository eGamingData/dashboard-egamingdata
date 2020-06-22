<?php include 'db_connection.php'; ?>  

<script>
window.onload = function () {

CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#882556",
                "#bb1255", 
                "#fc3468",
                "#ff6289",
                "#fc3468",

                ]);

var chart = new CanvasJS.Chart("chart", {
    colorSet: "greenShades",
    animationEnabled: true,
    exportEnabled: false,
    animationDuration: 3000,
    dataPointWidth: 30,
    exportFileName: "eGamingData_LEC_First_Drake",
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: " ",
        fontSize: 20,
        fontFamily: "arboria-bolduploaded_file",
        fontWeight: "bold",
        margin: 25,
        padding: 4,
    },

    axisY:{
      maximum: 100,
      labelFontFamily: "arboria-bolduploaded_file",
      labelFontSize: 15
     },
    axisX:{
      labelFontFamily: "arboria-bolduploaded_file",
      labelFontSize: 15,
       margin: 30
     },
    data: [{
        type: "bar",
        barThickness: 15,
        indexLabelFontFamily: "arboria-bolduploaded_file",
        indexLabelFontColor: "#5A5757",
        yValueFormatString: "#,##0\"%\"",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>

<div id="chart" style="height: 570px; width: 100%;"></div>


