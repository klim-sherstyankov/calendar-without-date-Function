<?php 


if (isset($_GET["year"])) {
		$year=$_GET["year"];
	}
	else{
		$year = 2019;
}
if (isset($_GET["month"])) {
		$month = $_GET["month"];
	}
	else{
		$month = 6;
}

 

if (isset($_GET["change"])){
	if ($_GET["change"] == '<') {
		$year = $_GET["year"]-1;
	}
	if ($_GET["change"] == '>') {
		$year = $_GET["year"]+1;
	}
	
	if ($_GET["change"] == '<|') {
		$month = $_GET["month"]-1;
		if ($month < 1 ) {
			$month = 12;
		}
	}
	if ($_GET["change"] == '|>') {
		$month = $_GET["month"]+1;
		if ($month > 12) {
			$month = 1;
		}
	}
}



include __DIR__ . '/form.php';
 ?>