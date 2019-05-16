<?php 

Class Statistics extends Execute{
	public function getAllTodayVisits($today_date){
		$sql="SELECT * FROM articles_visits WHERE web_last_visit LIKE \"%$today_date%\"";
		return $this->querying($sql);
		//return $sql;
	}
	public function getVisits($start_date,$end_date){
		$sql="SELECT * FROM articles_visits WHERE article_last_visit BETWEEN $start_date AND \"$end_date\"";
		return $this->querying($sql);
	}
	//get web visits date
	public function getWebVisitsDates(){
		$sql="SELECT DISTINCT web_last_visit FROM articles_visits ORDER BY web_last_visit";
		return $this->querying($sql);
	}
}
$stats=new Statistics();
?>
