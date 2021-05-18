@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{route('cellphones.create')}}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado De Celulares Registrados En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cellphones/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cellphones/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cellphones/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cellphones/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportcellphonesToCSV(event.target)" data-href="/exportcellphonesToCSV" id="export" class="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-dark table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Número De Cámaras</th>
                        <th>Cámara Trasera En Px</th>
                        <th>Cámara Frontal En Px</th>
                        <th>Tamaño De Pantalla</th>
                        <th>Resolución De La Pantalla</th>
                        <th>Capacidad De Memoria</th>
                        <th>RAM</th>
                        <th>Tipo De Sistema</th>
                        <th>Versión De Sistema</th>
                        <th>Capacidad De Bateria</th>
                        <th>Velocidad De Carga</th>
                        <th>Descripción</th>
                        <th>Comentario</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($celulares as $cellphone)
                    <tr>
                        <td>
                            <img style="width: 100px; height: 125px;" src="/imagenes/cellphones/{{ $cellphone->image }}" alt="{{ $cellphone->brand }} {{ $cellphone->model }}" />
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{route('cellphones.show', $cellphone->id)}}">
                                <h4><b> {{ $cellphone->brand}} </b></h4>
                            </a>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->model}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->color}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->camNumber}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->rearCamera_px}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->frontalCamera_px}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->screenSize}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->screenResolution}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->memory}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->ram}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->typeOfSystem}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->systemVersion}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->batteryCapacity}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->loadingspeed}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->description}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $cellphone->comment}} </b></p>
                        </td>

                        @empty
                        <h1>La tabla no tiene datos</h1>

                    </tr>

                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- DataTables -->
<script src="{{ asset('dist/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
<!-- Aplicación de DataTables -->
<script>
    $(function() {
        $('#example').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script>
    function exportcellphonesToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection