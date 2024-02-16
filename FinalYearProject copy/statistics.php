<?php

require_once 'database.php';
include_once 'header.php';


$day;
$water;
$sleep;
$totalCarbs;

$user = $_SESSION["user"];
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
$dataPoints4 = array();
$dataPoints5 = array();
$dataPoints6 = array();
$dataPoints7 = array();
$dataPoints8 = array();
$dataPoints9 = array();
$dataPoints10 = array();
$dataPoints11= array();
$dataPoints12 = array();

$dataPoints13 = array();




$sql = "SELECT * FROM dayDetails WHERE username = '$user'  ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        array_push($dataPoints1,array( "label" => strval($row["day"]), "y" =>strval($row["waterIntake"] )) );
        array_push($dataPoints2,array( "label" => strval($row["day"]), "y" =>strval($row["sleepHours"] )) );
		array_push($dataPoints3,array( "label" => strval($row["day"]), "y" =>strval($row["totalCarbs"] )) );
		array_push($dataPoints4,array( "label" => strval($row["day"]), "y" =>strval($row["complexCarbs"] )) );
        array_push($dataPoints5,array( "label" => strval($row["day"]), "y" =>strval($row["totalFats"] )) );
		array_push($dataPoints6,array( "label" => strval($row["day"]), "y" =>strval($row["unsaturatedFats"] )) );
		array_push($dataPoints7,array( "label" => strval($row["day"]), "y" =>strval($row["protein"] )) );
        array_push($dataPoints8,array( "label" => strval($row["day"]), "y" =>strval($row["fibre"] )) );
		array_push($dataPoints9,array( "label" => strval($row["day"]), "y" =>strval($row["highCardio"] )) );
		array_push($dataPoints10,array( "label" => strval($row["day"]), "y" =>strval($row["lowCardio"] )) );
        array_push($dataPoints11,array( "label" => strval($row["day"]), "y" =>strval($row["highStrength"] )) );
		array_push($dataPoints12,array( "label" => strval($row["day"]), "y" =>strval($row["lowStrength"] )) );


      
    }

} 





$sql2 = "SELECT * FROM moods WHERE username = '$user'  ;";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {

    while($row = $result2->fetch_assoc()) {

        array_push($dataPoints13,array( "label" => strval($row["date"]), "y" =>strval($row["mood"] )) );


      
    }

} 






?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="cssFiles/statistics.css">

<script>
window.onload = function() {




	var chart13 = new CanvasJS.Chart("chartContainer13", {
	animationEnabled: true,
	title:{
		text: "	Mood"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints13, JSON_NUMERIC_CHECK); ?>
	}]
});
chart13.render(); 








var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title:{
		text: "Water Intake(LITRES)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render(); 




var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Sleep(HOURS)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render(); 







var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title:{
		text: "	ComplexCarbs(Grams)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render(); 





var chart6 = new CanvasJS.Chart("chartContainer6", {
	animationEnabled: true,
	title:{
		text: "	Unsaturated Fats (Grams)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});
chart6.render(); 



var chart7 = new CanvasJS.Chart("chartContainer7", {
	animationEnabled: true,
	title:{
		text: "	Protein  (Grams)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart7.render(); 



var chart8 = new CanvasJS.Chart("chartContainer8", {
	animationEnabled: true,
	title:{
		text: "	Fibre (Grams)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints8, JSON_NUMERIC_CHECK); ?>
	}]
});
chart8.render(); 





var chart9 = new CanvasJS.Chart("chartContainer9", {
	animationEnabled: true,
	title:{
		text: "	High intensity cardio (mins)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints9, JSON_NUMERIC_CHECK); ?>
	}]
});
chart9.render(); 



var chart10 = new CanvasJS.Chart("chartContainer10", {
	animationEnabled: true,
	title:{
		text: "	Low intensity cardio  (mins)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints10, JSON_NUMERIC_CHECK); ?>
	}]
});
chart10.render(); 



var chart11 = new CanvasJS.Chart("chartContainer11", {
	animationEnabled: true,
	title:{
		text: "	High intensity  strength (mins)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints11, JSON_NUMERIC_CHECK); ?>
	}]
});
chart11.render(); 



var chart12 = new CanvasJS.Chart("chartContainer12", {
	animationEnabled: true,
	title:{
		text: "	low intensity strength (mins)"
	},
	axisY: {
	},
	data: [{
        color: "#2fa3e1",

		type: "column",
		dataPoints: <?php echo json_encode($dataPoints12, JSON_NUMERIC_CHECK); ?>
	}]
});
chart12.render(); 









}
</script>



</head>
<body>
<div id ="title"> Your Progress </div>
<br>
<br>
<br>
<div id="chartContainer13" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer1" style="height: 200px; width: 70%;   display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer2" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<br>
<br>
<div id="chartContainer4" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<br>
<div id="chartContainer6" style="height: 200px; width: 70%;   display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer7" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer8" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer9" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br><div id="chartContainer10" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br><div id="chartContainer11" style="height: 200px; width: 70%;   display: block; margin-left: auto; margin-right: auto"></div>
<br>
<br>
<div id="chartContainer12" style="height: 200px; width: 70%;    display: block; margin-left: auto; margin-right: auto"></div>
<br>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              
