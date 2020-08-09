<?php  
session_start();
$summ = $_POST['summ'];
$period = $_POST['period'];
if ($period == '1') {
	$percent = 0.04;
	$per = 1;
} elseif ($period == '7') {
	$percent = 0.07;
	$per = 5;
} elseif ($period == '30') {
	$percent = 0.1;
	$per = 22;
}

for ($i=0; $i < $per; $i++) { 
	$day_summ = $summ * $percent;
	$summ = $summ + $day_summ;
}
$result = round($summ, 2);
$_SESSION['result'] = $result;
header('Location: calc.php')
// echo "$result";
?>