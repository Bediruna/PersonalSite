<?php
	
	$file = 'loads.json';
	//Get data from existing json file
	$jsondata = file_get_contents($file);

	// converts json data into array
	$arr_data = json_decode($jsondata, true);

	$extra = array(  
		'id'     => "",  
		'cell_A' => "",  
		'cell_B' => "",
		'cell_C' => "",
		'cell_D' => "",
		'cell_E' => "",
		'cell_F' => "",
		'cell_G' => "",
		'cell_H' => "",
		'cell_I' => "",
		'cell_J' => "",
		'cell_K' => "",
		'cell_L' => "",
		'cell_M' => "",
		'cell_N' => "",
		'cell_O' => "",
		'cell_P' => "",
		'cell_Q' => "",
		'cell_R' => "",
		'cell_S' => "",
		'cell_T' => "",
		'cell_U' => "",
		'cell_V' => "",
		'flag_check' => "",
		'last_modified_by' => ""
	);

	array_push($arr_data["loads"], $extra);

	//Convert updated array to JSON
	$jsondata = json_encode($arr_data);
	   
	//write json data into data.json file
	if(file_put_contents($file, $jsondata)) {}

?>