$(document).ready(function(){
	var h_visits=$("#h_visits");
	$("#frm_stats").submit(function(e){
		e.preventDefault();
		var visits_date=$("#visits_date").val();
		loadVisits(visits_date);
	});
});

function loadVisits(visits_date){
	var url="requests?visit_date="+visits_date;
	$.get(url,function(response){
		$("#h_visits").html(response+" Visits");
	});
}