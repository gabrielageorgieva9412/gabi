<?php


$p=$_POST["data1"];
print $p;
 

?>


<!DOCTYPE HTML>
<html>

<head>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">


window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",{
		title: {
			text: "Температури в избрания интервал:"
		},
		axisX:{
			minimum: 5,
			maximum: 95
		},
		data: [
		{
			 type: "spline",
			// cursor: "move",
			dataPoints: [
				{ x: 10, y: 71 },
				{ x: 20, y: 55 },
				{ x: 30, y: 50 },
				{ x: 40, y: 65 },
				{ x: 50, y: 95 },
				{ x: 60, y: 68 },
				{ x: 70, y: 28 },
				{ x: 80, y: 34 },
				{ x: 90, y: 14 }
			]
		}					
		]
	});

	chart.render();
	var record = false;
	var precisionLevel = 1;
	var xValue, yValue, parentOffset, relX, relY;
	var selected;
	var timerId = null;
	jQuery(".canvasjs-chart-canvas").last().on({
		/*mousedown: function(e) {
			parentOffset = $(this).parent().offset();
			relX = e.pageX - parentOffset.left;
			relY = e.pageY - parentOffset.top;
			xValue = Math.round(chart.axisX[0].convertPixelToValue(relX));
			yValue = Math.round(chart.axisY[0].convertPixelToValue(relY));
			var dps = chart.data[0].dataPoints;
			for(var i = 0; i < dps.length; i++ ) {
				if((xValue >= dps[i].x - precisionLevel && xValue <= dps[i].x + precisionLevel) && (yValue >= dps[i].y - precisionLevel && yValue <= dps[i].y + precisionLevel) ) {
					record = true;
					selected = i;
					break;
				} else {
					selected = null;
					continue;
				}
			}
		},
		
		
		// Откоментирай за да може да местиш графиката с мишка
		/*mousemove: function(e) {
			if(record ==  true) {
				parentOffset = $(this).parent().offset();
				relX = e.pageX - parentOffset.left;
				relY = e.pageY - parentOffset.top;
				xValue = Math.round(chart.axisX[0].convertPixelToValue(relX));
				yValue = Math.round(chart.axisY[0].convertPixelToValue(relY));
				clearTimeout(timerId);
				timerId = setTimeout(function(){
				if(selected != null) {
					chart.data[0].dataPoints[selected].x = xValue;
					chart.data[0].dataPoints[selected].y = yValue;
					chart.render();
				}	
				}, 0);
			}
		},
		mouseup: function(e) {
			if(selected != null) {
				chart.data[0].dataPoints[selected].x = xValue;
				chart.data[0].dataPoints[selected].y = yValue;
				chart.render();
				record = false;
			}
		}*/
	});
}
</script>    
</head>
<body>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>