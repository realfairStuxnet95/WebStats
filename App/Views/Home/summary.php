<?php 
$today_date=date('Y-m-d');
$server_date=$function->fixServerDate("2019-04-16 14:41:20");
$TodayVisits=$stats->getAllTodayVisits($today_date);
?>
<div class="row">
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="card-box widget-box-one">
            <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
            <div class="wigdet-one-content">
                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Today Web Visits</p>
                <h2 id="h_visits"><?php echo count($TodayVisits); ?></h2>
                +3663
            </div>
        </div>
    </div>
</div>