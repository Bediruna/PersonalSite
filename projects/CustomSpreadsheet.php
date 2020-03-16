<!--
Custom Spreadsheet
This spreadsheet software stores data in a JSON file that can be read and written to instantly.
Written by Bedir Aygun
-->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Custom Spreadsheet</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin-side.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
</head>

<body onload="checkTable()">

	<script>
		var myInterval;

		var indArr = new Array();
		var IDArr = new Array();
		var cellAArr = new Array();
		var cellBArr = new Array();
		var cellCArr = new Array();
		var cellDArr = new Array();
		var cellEArr = new Array();
		var cellFArr = new Array();
		var cellGArr = new Array();
		var cellHArr = new Array();
		var cellIArr = new Array();
		var cellJArr = new Array();
		var cellKArr = new Array();
		var cellLArr = new Array();
		var cellMArr = new Array();

		//call data from JSON file
		$.ajax({
			url: 'loads.json',
			dataType: 'json',
			type: 'get',
			cache: false,
			success: function(data){
				$(data.loads).each(function(index, value){

					var tblRow = "<tr id='row" + index + "' class='table-row' style='text-align: center;'>" +
									"<td class='loadbaord_cell_xsmall'>" + value.id + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_A' contenteditable='true' onblur='saveToFile(this, `cell_A`,"+ index + ")'>" + value.cell_A + "</td>" +
									"<td class='loadbaord_cell_medium' id='" + index + "cell_B' contenteditable='true' onblur='saveToFile(this, `cell_B`,"+ index + ")'>" + value.cell_B + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_C' contenteditable='true' onblur='saveToFile(this, `cell_C`,"+ index + ")'>" + value.cell_C + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_D' contenteditable='true' onblur='saveToFile(this, `cell_D`,"+ index + ")'>" + value.cell_D + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_E' contenteditable='true' onblur='saveToFile(this, `cell_E`,"+ index + ")'>" + value.cell_E + "</td>" +
									"<td id='" + index + "cell_F' style='width: 100px; height: 28px; display: inline-block; background-color: #eee; border: 1px white solid; color: #333333; font-size: small; padding: 1px; margin-top: -2px' > " +
										"<select style='width: 100%; height: 100%; border: 0px;' class='' onchange='saveSelectToFile(this, `cell_F`, "+ index + ")'>" +
											"<option value='" + value.cell_F + "' selected hidden></option>" +
											"<option style='background-color: white; color: black' value='Dispatched'>Dispatched</option>" +
											"<option style='background-color: white; color: black' value='Reserved'>Reserved</option>" +
											"<option style='background-color: white; color: black' value='Ready'>Ready</option>" +
											"<option style='background-color: white; color: black' value='Ready_Hot'>Ready Hot!</option>" +
											"<option style='background-color: white; color: black' value='Enroute'>Enroute</option>" +
											"<option style='background-color: white; color: black' value='Rest'>Rest</option>" +
											"<option style='background-color: white; color: black' value='Home'>Home</option>" +
											"<option style='background-color: white; color: black' value='Shop'>Shop</option>" +
										"</select>" +
									"</td>" +
									"<td class='loadbaord_cell_medium' id='" + index + "cell_G' contenteditable='true' onblur='saveToFile(this, `cell_G`,"+ index + ")'>" + value.cell_G + "</td>" +
									"<td class='loadbaord_cell_medium' id='" + index + "cell_H' contenteditable='true' onblur='saveToFile(this, `cell_H`,"+ index + ")'>" + value.cell_H + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_I' contenteditable='true' onblur='saveToFile(this, `cell_I`,"+ index + ")'>" + value.cell_I + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_J' contenteditable='true' onblur='saveToFile(this, `cell_J`,"+ index + ")'>" + value.cell_J + "</td>" +
									"<td class='loadbaord_cell_medium' id='" + index + "cell_K' contenteditable='true' onblur='saveToFile(this, `cell_K`,"+ index + ")'>" + value.cell_K + "</td>" +
									"<td class='loadbaord_cell_small' id='" + index + "cell_L' contenteditable='true' onblur='saveToFile(this, `cell_L`,"+ index + ")'>" + value.cell_L + "</td>" +
									"<td class='loadbaord_cell_large' id='" + index + "cell_M' contenteditable='true' onblur='saveToFile(this, `cell_M`,"+ index + ")'>" + value.cell_M + "</td>" +
								"</tr>";
					
					indArr.push(index);
					IDArr.push(value.id);
					cellAArr.push(value.cell_A);
					cellBArr.push(value.cell_B);
					cellCArr.push(value.cell_C);
					cellDArr.push(value.cell_D);
					cellEArr.push(value.cell_E);
					cellFArr.push(value.cell_F);
					cellGArr.push(value.cell_G);
					cellHArr.push(value.cell_H);
					cellIArr.push(value.cell_I);
					cellJArr.push(value.cell_J);
					cellKArr.push(value.cell_K);
					cellLArr.push(value.cell_L);
					cellLArr.push(value.cell_M);

				   $(tblRow).appendTo("#userdata tbody");

				});
			}
		});

		function checkTable(){

			$.ajax({
				url: 'loads.json',
				dataType: 'json',
				type: 'get',
				cache: false,
				success: function(data){
					$(data.loads).each(function(index, value){

						if(document.getElementById(index + "cell_A").innerHTML != value.cell_A && (document.activeElement != document.getElementById(index + "cell_A"))){
							document.getElementById(index + "cell_A").innerHTML = value.cell_A;
						}
						if(document.getElementById(index + "cell_B").innerHTML != value.cell_B && (document.activeElement != document.getElementById(index + "cell_B"))){
							document.getElementById(index + "cell_B").innerHTML = value.cell_B;
						}
						if(document.getElementById(index + "cell_C").innerHTML != value.cell_C && (document.activeElement != document.getElementById(index + "cell_C"))){
							document.getElementById(index + "cell_C").innerHTML = value.cell_C;
						}
						if(document.getElementById(index + "cell_D").innerHTML != value.cell_D && (document.activeElement != document.getElementById(index + "cell_D"))){
							document.getElementById(index + "cell_D").innerHTML = value.cell_D;
						}
						if(document.getElementById(index + "cell_E").innerHTML != value.cell_E && (document.activeElement != document.getElementById(index + "cell_E"))){
							document.getElementById(index + "cell_E").innerHTML = value.cell_E;
						}
						/*if(document.getElementById(index + "cell_F").innerHTML != value.cell_F && (document.activeElement != document.getElementById(index + "cell_F"))){
							document.getElementById(index + "cell_F").innerHTML = value.cell_F;
						}*/
						if(document.getElementById(index + "cell_G").innerHTML != value.cell_G && (document.activeElement != document.getElementById(index + "cell_G"))){
							document.getElementById(index + "cell_G").innerHTML = value.cell_G;
						}
						if(document.getElementById(index + "cell_H").innerHTML != value.cell_H && (document.activeElement != document.getElementById(index + "cell_H"))){
							document.getElementById(index + "cell_H").innerHTML = value.cell_H;
						}
						if(document.getElementById(index + "cell_I").innerHTML != value.cell_I && (document.activeElement != document.getElementById(index + "cell_I"))){
							document.getElementById(index + "cell_I").innerHTML = value.cell_I;
						}
						if(document.getElementById(index + "cell_J").innerHTML != value.cell_J && (document.activeElement != document.getElementById(index + "cell_J"))){
							document.getElementById(index + "cell_J").innerHTML = value.cell_J;
						}
						if(document.getElementById(index + "cell_K").innerHTML != value.cell_K && (document.activeElement != document.getElementById(index + "cell_K"))){
							document.getElementById(index + "cell_K").innerHTML = value.cell_K;
						}
						if(document.getElementById(index + "cell_L").innerHTML != value.cell_L && (document.activeElement != document.getElementById(index + "cell_L"))){
							document.getElementById(index + "cell_L").innerHTML = value.cell_L;
						}
						if(document.getElementById(index + "cell_M").innerHTML != value.cell_M && (document.activeElement != document.getElementById(index + "cell_M"))){
							document.getElementById(index + "cell_M").innerHTML = value.cell_M;
						}
					});
				}
			});
			clearInterval(myInterval);
			myInterval = setInterval(checkTable, 1000);
		}

		function saveToFile(editableObj, column, index){
			
			$.ajax({
				url: "savejsonedit.php",
				type: "POST",
				data: 'column='+column+'&editval='+editableObj.innerHTML+'&index='+index,
				success: function(data){

				}        
			});
		}

		function addRow(){
			$.ajax({
				url: "addjsonrow.php",
				type: 'POST'
			});
			location.reload();
		}

		function saveSelectToFile(editableObj,column,index) {
			$.ajax({
				url: "savejsonedit.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.value+'&index='+index,
				success: function(data){

				}        
		   });
		}

		var IDArr = new Array();
		var cellAArr = new Array();
		var cellBArr = new Array();
		var cellCArr = new Array();
		var cellDArr = new Array();
		var cellEArr = new Array();
		var cellFArr = new Array();
		var cellGArr = new Array();
		var cellHArr = new Array();
		var cellIArr = new Array();
		var cellJArr = new Array();
		var cellKArr = new Array();
		var cellLArr = new Array();
		var cellMArr = new Array();

		function showSearch(){

			if(document.getElementById("searchBoxes").style.display == "table-row"){
		
				document.getElementById("searchBoxes").style.display = "none";
			
			}else{
				document.getElementById("searchBoxes").style.display = "table-row";
			
				document.getElementById("IDSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellASearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellBSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellCSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellDSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellESearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellFSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellGSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellHSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellISearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellJSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellKSearch").addEventListener("keyup", function() { submitQuery(); }, false);
				document.getElementById("cellLSearch").addEventListener("keyup", function() { submitQuery(); }, false);

			}
		}

		function submitQuery() {
		
				var IDQry = document.getElementById("IDSearch").value;
				var cellAQry = document.getElementById("cellASearch").value;
				var cellBQry = document.getElementById("cellBSearch").value;
				var cellCQry = document.getElementById("cellCSearch").value;
				var cellDQry = document.getElementById("cellDSearch").value;
				var cellEQry = document.getElementById("cellESearch").value;
				var cellFQry = document.getElementById("cellFSearch").value;
				var cellGQry = document.getElementById("cellGSearch").value;
				var cellHQry = document.getElementById("cellHSearch").value;
				var cellIQry = document.getElementById("cellISearch").value;
				var cellJQry = document.getElementById("cellJSearch").value;
				var cellKQry = document.getElementById("cellKSearch").value;
				var cellLQry = document.getElementById("cellLSearch").value;
		
			
				var arrToHide = indArr.slice();
				var indexArr = new Array();
				var searchArr = new Array();
				var qryCount = 0;
		
				for(var i = 0; i < indArr.length; i++){
					document.getElementById("row" + indArr[i]).style.display = "table-row";
				}
			
				if(IDQry != ""){
					qryCount++;
					for(var i in IDArr){
						if(IDArr[i].search(IDQry) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellAQry != ""){
					qryCount++;
					for(var i in cellAArr){
						if(cellAArr[i].toLowerCase().search(cellAQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellBQry != ""){
					qryCount++;
					for(var i in cellBArr){
						if(cellBArr[i].toLowerCase().search(cellBQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellCQry != ""){
					qryCount++;
					for(var i in cellCArr){
						if(cellCArr[i].toLowerCase().search(cellCQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellDQry != ""){
					qryCount++;
					for(var i in cellDArr){
						if(cellDArr[i].toLowerCase().search(cellDQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellEQry != ""){
					qryCount++;
					for(var i in cellEArr){
						if(cellEArr[i].toLowerCase().search(cellEQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellFQry != ""){
					qryCount++;
					for(var i in cellFArr){
						if(cellFArr[i].toLowerCase().search(cellFQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellGQry != ""){
					qryCount++;
					for(var i in cellGArr){
						if(cellGArr[i].toLowerCase().search(cellGQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellHQry != ""){
					qryCount++;
					for(var i in cellHArr){
						if(cellHArr[i].toLowerCase().search(cellHQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellIQry != ""){
					qryCount++;
					for(var i in cellIArr){
						if(cellIArr[i].toLowerCase().search(cellIQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellJQry != ""){
					qryCount++;
					for(var i in cellJArr){
						if(cellJArr[i].toLowerCase().search(cellJQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellKQry != ""){
					qryCount++;
					for(var i in cellKArr){
						if(cellKArr[i].toLowerCase().search(cellKQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				if(cellLQry != ""){
					qryCount++;
					for(var i in cellLArr){
						if(cellLArr[i].toLowerCase().search(cellLQry.toLowerCase()) > -1){
							indexArr.push(i);
						}
					}
				}

				var copy = indexArr.slice(0);

				for (var i = 0; i < indexArr.length; i++) {
 
					var myCount = 0;	
			
					for (var w = 0; w < copy.length; w++) {
						if (indexArr[i] == copy[w]) {
					
							myCount++;
					
							delete copy[w];
						}
					}
 
					if (myCount > 0 && myCount == qryCount) {
						searchArr.push(indexArr[i]);
					}
				}

				for(var i = searchArr.length - 1; i >= 0; --i){
					arrToHide.splice(searchArr[i], 1);
				}
						
				for(var i = 0; i < arrToHide.length; i++){
					document.getElementById("row" + arrToHide[i]).style.display = "none";
				}
			
				if(searchArr === undefined || searchArr.length == 0){
					for(var i = 0; i < indArr.length; i++){
						document.getElementById("row" + indArr[i]).style.display = "table-row";
					}
				}

			}

	 </script>

	<div class="status-division">
		<div class="status-sort-box">
			<button class="btn btn-secondary" onclick="addRow()">Add Row</button>
			<button class="btn btn-secondary" onclick="showSearch()"><i class="fa fa-search" title="Search"></i></button>
			<button class="btn btn-secondary" onclick="checkTable()"><i class="fa fa-refresh" title="Refresh"></i></button>
		</div>
	</div>

	<!-- Loadboard -->
	<div id="loadboard" class="list-division" style="height: 800px; display: block; overflow-x: scroll; overflow-y: scroll">
		<table id="userdata" style="margin-left: 8px; display: block; width: 2588px">
			<thead>
				<tr style="text-align: center;">
					<th class="loadbaord_cell_xsmall" style="color: white; background-color: #444444; border: 1px white solid">ID</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Load#</th>
					<th class="loadbaord_cell_medium" style="color: white; background-color: #444444; border: 1px white solid">Driver Name</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Truck#</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Trailer#</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Phone Number</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Status</th>
					<th class="loadbaord_cell_medium" style="color: white; background-color: #444444; border: 1px white solid">ETA</th>
					<th class="loadbaord_cell_medium" style="color: white; background-color: #444444; border: 1px white solid">Destination</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Miles</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Rate $</th>
					<th class="loadbaord_cell_medium" style="color: white; background-color: #444444; border: 1px white solid">Dispatcher</th>
					<th class="loadbaord_cell_small" style="color: white; background-color: #444444; border: 1px white solid">Date</th>
					<th class="loadbaord_cell_large" style="color: white; background-color: #444444; border: 1px white solid">Notes:</th>
				</tr>
				<tr style="">
					<th id="searchBoxes" style="display: none;">
						<form id="searchForm">
							<input type="text" id="IDSearch" class="loadbaord_cell_xsmall">
							<input type="text" id="cellASearch" class="loadbaord_cell_small">
							<input type="text" id="cellBSearch" class="loadbaord_cell_medium">
							<input type="text" id="cellCSearch" class="loadbaord_cell_small">
							<input type="text" id="cellDSearch" class="loadbaord_cell_small">
							<input type="text" id="cellESearch" class="loadbaord_cell_small">
							<input type="text" id="cellFSearch" class="loadbaord_cell_small">
							<input type="text" id="cellGSearch" class="loadbaord_cell_medium">
							<input type="text" id="cellHSearch" class="loadbaord_cell_medium">
							<input type="text" id="cellISearch" class="loadbaord_cell_small">
							<input type="text" id="cellJSearch" class="loadbaord_cell_small">
							<input type="text" id="cellKSearch" class="loadbaord_cell_medium">
							<input type="text" id="cellLSearch" class="loadbaord_cell_small">
							<input type="text" id="cellMSearch" class="loadbaord_cell_large">
						</form>
					</th>
				</tr>
			</thead>

			<tr class="table-row" style="text-align: center;"></tr>

		</table>

	</div>


	<!-- scripts -->

</body>

</html>
