<?php 
require 'class_loader.php';
$request=array_merge($_POST,$_GET);
if(isset($request['visit_date']) && $request['visit_date']!=''){
	$visit_date=$function->fixServerDate($request['visit_date']);
	$statsVisits=$stats->getAllTodayVisits($visit_date);
	echo count($statsVisits);
}elseif(isset($request['start_date']) && isset($request['end_date'])){
	$start_date=$function->fixServerDate($request['start_date']);
	$end_date=$function->fixServerDate($request['end_date']);
	$visits=$stats->getVisits($start_date,$end_date);
	echo count($visits);
}
else{
	echo "500";
}
?>