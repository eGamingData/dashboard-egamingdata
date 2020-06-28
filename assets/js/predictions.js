function loadCharts() {

		for (var i = 0; i < arrayLength; i++) {
		    console.log(datapoints[i]);

		    var chart = new CanvasJS.Chart(i, {
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
		        type: "pie",
		        barThickness: 15,
		        indexLabelFontFamily: "arboria-bolduploaded_file",
		        indexLabelFontColor: "#5A5757",
		        yValueFormatString: "#,##0\"%\"",
		        dataPoints: datapoints[i]
		    }]
		});

		chart.render();
		console.log('Chart'+ i + "created...");
		    
		}
    
  	}