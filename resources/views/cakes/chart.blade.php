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
    var pasteles = <?php echo json_encode($pasteles) ?>;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Pastel'
        },
        subtitle: {
            name: 'Nuevos pastel'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de pastel'
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
            name: 'Pastel',
            data: pasteles
        }],
        responsive: {

        }

    });
</script>


<script type="text/javascript">
    var pasteles2 = <?php echo json_encode($pasteles2) ?>;
    Highcharts.chart('container2', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Número de Pasteles'
        },
        subtitle: {
            name: 'Número de Pasteles'
        },
        xAxis: {
            categories: ['1 Pastel', '2 Pasteles', '3 Pasteles', '4 Pasteles', '5 Pasteles', '6 Pasteles', '7 Pasteles', '8 Pasteles', '9 Pasteles']
        },
        yAxis: {
            title: {
                text: 'Cantidad de pastel'
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
            name: 'Pastel',
            data: pasteles2
        }],
        responsive: {

        }

    });
</script>
@endsection