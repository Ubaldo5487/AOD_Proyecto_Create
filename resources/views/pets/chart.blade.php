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
    var mascota1 = <?php echo json_encode($mascota1) ?>;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Mascotas'
        },
        subtitle: {
            name: 'Nuevas Mascotas'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Mascotas'
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
            name: 'Mascotas',
            data: mascota1
        }],
        responsive: {

        }

    });
</script>


<script type="text/javascript">
    var mascota2 = <?php echo json_encode($mascota2) ?>;
    Highcharts.chart('container2', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Edad De Mascotas'
        },
        subtitle: {
            name: 'Edad De Mascotas'
        },
        xAxis: {
            categories: ["0 Años", '1 Año', '2 Años', '3 Años', '4 Años', '5 Años', '6 Años', '7 Años', '8 Años', '9 Años', ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Mascotas'
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
            name: 'Mascotas',
            data: mascota2
        }],
        responsive: {

        }

    });
</script>
@endsection