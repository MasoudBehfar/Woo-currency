<?php
date_default_timezone_set( "Asia/Tehran" );
include "db.php";
$stmt = $connection->prepare( "SELECT dollar,euro,DATE(create_date) as create_date FROM currency" );
$stmt->execute();
$dates  = [];
$dollar = [];
$euro   = [];
while ( $record = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
	$dates[]  = $record['create_date'];
	$dollar[] = $record['dollar'];
	$euro[]   = $record['euro'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

</head>
<body>
<div class="wrapper">
    <canvas id="currency"></canvas>
</div>
<script>
    var config = {
        type: 'line',
        data: {
            labels: <?php echo  json_encode($dates); ?>,
            datasets: [{
                label: 'Dollar',
                backgroundColor: '#cc0000',
                borderColor: '#c00000',
                data: <?php echo json_encode($dollar); ?>,
                fill: false,
            }, {
                label: 'Euro',
                fill: false,
                backgroundColor: '#0000cc',
                borderColor: '#0000cc',
                data: <?php echo json_encode($euro); ?>,
            }]
        }
    };
    var ctx = document.getElementById('currency').getContext('2d');
    new Chart(ctx, config);
</script>
</body>
</html>
