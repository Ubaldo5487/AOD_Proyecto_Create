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
    var datos = <?php echo json_encode($datos) ?>;
    Highcharts.chart('container', {
        chart: {
            type: 'scatter'
            
        },
        title: {
            text: 'Canciones'
        },
        subtitle: {
            name: 'Nuevas Canciones'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Canciones'
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
            name: 'Canciones',
            data: datos
        }],
        responsive: {

        }

    });
</script>

<script type="text/javascript">
    var datos2 = <?php echo json_encode($datos2) ?>;
    Highcharts.chart('container2', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Disponibilidad De Canciones'
        },
        subtitle: {
            name: 'Disponibilidad De Canciones'
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            title: {
                text: 'Cantidad de Canciones'
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
            name: 'Canciones',
            data: datos2
        }],
        responsive: {

        }

    });
</script>

@endsection