<?php 
include 'class_loader.php';
$today_date="2019-04-16";
$server_date=$function->fixServerDate("2019-04-16 14:41:20");
$TodayVisits=$stats->getAllTodayVisits($today_date);
$counter=0;
// foreach ($TodayVisits as $key => $value) {
// 	$server_date=$function->fixServerDate($value['web_last_visit']);
// 	if($server_date==$today_date){
// 		$counter++;
// 	}
// }
// echo $counter;
// $DistinctDate=$stats->getWebVisitsDates();
// echo $function->number_date_format("2019-01-19 19:44:23");
$statsVisits=$stats->getAllTodayVisits("2019-04-16");
echo count($statsVisits);
?>
