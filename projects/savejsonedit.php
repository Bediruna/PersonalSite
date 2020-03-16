<?php
	
	$file = 'loads.json';
	$index = $_POST['index'];
	$column = $_POST['column'];
	$value = $_POST['editval'];

	//Get data from existing json file
	$jsondata = file_get_contents($file);

	// converts json data into array
	$arr_data = json_decode($jsondata, true);

	//change array value
	$arr_data["loads"][$index][$column] = $value;

	//Convert updated array to JSON
	$jsondata = json_encode($arr_data);
	   
	//write json data into data.json file
	if(file_put_contents($file, $jsondata)) {}

?>