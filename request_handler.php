<?php 
require 'class_loader.php';
$request=array_merge($_POST,$_GET);
if(isset($request['visit_date']) && $request['visit_date']!=''){
	$visit_date=$function->fixServerDate($request['visit_date']);
	$statsVisits=$stats->getAllTodayVisits($visit_date);
	echo count($statsVisits);
}else{
	echo "500";
}
?>