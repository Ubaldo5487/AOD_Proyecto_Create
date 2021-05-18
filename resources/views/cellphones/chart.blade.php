@extends('layouts.dashboard')

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Demonstrating a basic area chart, also known as a mountain chart.
        Area charts are similar to line charts, but commonly used to visualize
        volumes.
    </p>
</figure>


<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Demonstrating a basic area chart, also known as a mountain chart.
        Area charts are similar to line charts, but commonly used to visualize
        volumes.
    </p>
</figure>

<script type="text/javascript">
    var celulares = <?php echo json_encode($celulares) ?>;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Celulares'
        },
        subtitle: {
            name: 'Nuevos Celulares'
        },
        xAxis: {
            categories: [
                
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Celulares'
            }
        },
        legend: {
            layout: 'vertical',
            aling: 'right',
            verticalAling: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Celulares',
            data: celulares
        }],
        responsive: {

        }

    });
</script>

<script type="text/javascript">
    var celulares2 = <?php echo json_encode($celulares2) ?>;
    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Número de Cámaras'
        },
        subtitle: {
            name: 'Número de Cámaras'
        },
        xAxis: {
            categories: ['1 Cámara', '2 Cámara', '3 Cámara', '4 Cámara', '5 Cámara', '6 Cámara', '7 Cámara', '8 Cámara', '9 Cámara']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Celulares'
            }
        },
        legend: {
            layout: 'vertical',
            aling: 'right',
            verticalAling: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Celulares',
            data: celulares2
        }],
        responsive: {

        }

    });
</script>

@endsection