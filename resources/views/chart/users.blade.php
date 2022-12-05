<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
   
<body>
<h1>Data User</h1>
<div id="users"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
   
    Highcharts.chart('users', {
        title: {
            text: 'Data User Tahfidz'
        },
        subtitle: {
            text: 'Data User'
        },
         xAxis: {
            categories: <?php echo json_encode($tgl); ?>,
            crosshair: true
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: <?php echo json_encode($orang); ?>,
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>