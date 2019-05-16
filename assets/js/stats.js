$(document).ready(function(){
	var h_visits=$("#h_visits");
	$("#frm_stats").submit(function(e){
		e.preventDefault();
		var visits_date=$("#visits_date").val();
		loadVisits(visits_date);
	});
	$("#frm_stats_range").submit(function(e){
		e.preventDefault();
		var start_date=$("#start_date").val();
		var end_date=$("#end_date").val();
		loadRangeVisits(start_date,end_date);
	});
});

function loadVisits(visits_date){
	var url="requests?visit_date="+visits_date;
	$.get(url,function(response){
		$("#h_visits").html(response+" Visits");
	});
}
function loadRangeVisits(start_date,end_date){
	var url="requests?start_date="+start_date+"&end_date="+end_date;
	$.get(url,function(response){
		$(".p_title").html(start_date+" - "+end_date);
		$("#range_visits").html(response+" Visits");
	});
}