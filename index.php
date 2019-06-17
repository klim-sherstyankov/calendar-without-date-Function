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


$daycount = (31 - (($month - 1) % 7 % 2) - ((($month == 2) << !!($year % 4))));

$m_array = array(
	1 => 1,
	2 => 4,
	3 => 4,
	4 => 0,
	5 => 2,
	6 => 5,
	7 => 0,
	8 => 3, 
	9 => 6,
	10 => 1,
	11 => 4,
	12 => 6
);

$m = $m_array[$month ];

$y = (6 + substr($year, -2) + substr($year, -2) / 4) % 7;


$begin_week = (1 + $m + $y) % 7 -1 ;

if ($begin_week == -1) {
	$begin_week = 6;
}
if ($begin_week == 0) {
	$begin_week = 7;
}
$num=0;
$day_count = 1;
while (true) {
	$num++;
	if ($num == 1) {
	for ($i=0; $i <7 ; $i++) { 
		if ($i < $begin_week - 1) {
			$week[$num][$i]="";
		
		}else{
			$week[$num][$i]=$day_count;
		$day_count++;
		}
		
	}
	} else{
	for ($i=0; $i <7 ; $i++) { 
		$week[$num][$i]=$day_count;
		$day_count++;
		if ($day_count > $daycount) break;
	}
	if ($day_count > $daycount) break;
}
}


include __DIR__ . '/form.php';
 ?>