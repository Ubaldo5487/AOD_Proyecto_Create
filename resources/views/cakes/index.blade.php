@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{route('cakes.create')}}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado De Pasteles Registrados En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cakes/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cakes/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cakes/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cakes/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportcakesToCSV(event.target)" data-href="/exportcakesToCSV" id="export" class="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-dark table-hover">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Ingredientes</th>
                        <th>Sabor</th>
                        <th>Cantidad</th>
                        <th>Tamaño</th>
                        <th>Descripción</th>
                        <th>Comentario</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($pasteles as $cake)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100px;" src="/imagenes/cakes/{{ $cake->image }}" alt="{{ $cake->client_name }} {{ $cake->taste }}" />
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{route('cakes.show', $cake->id)}}">
                                <h4><b>{{ $cake->client_name}}</b></h4>
                            </a>
                        </td>
                        <td>
                            <p><b>{{ $cake->client_direction}}</b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->ingredient}} </b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->taste}} </b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->quantity}} </b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->size}} </b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->description}} </b></p>
                        </td>
                        <td>
                            <p><b>{{ $cake->comment}} </b></p>
                        </td>

                        @empty
                        <h1>La tabla no tiene datos</h1>

                    </tr>

                    @endforelse
                </tbody>
            </table>

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
        function exportcakesToCSV(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>

    @endsection