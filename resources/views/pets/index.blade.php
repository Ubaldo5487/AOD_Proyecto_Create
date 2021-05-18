@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{route('pets.create')}}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado De Mascotas Registradas En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/pets/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/pets/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/pets/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{url('/pets/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportpetsToCSV(event.target)" data-href="/exportpetsToCSV" id="export" class="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>
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
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Edad</th>
                        <th>Color</th>
                        <th>Tamaño</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($mascota1 as $mascota)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100px; " src="/imagenes/pets/{{ $mascota->image }}" alt="{{ $mascota->name }} {{ $mascota->species }}" />
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{route('pets.show', $mascota->id)}}">
                                <h4><b> {{ $mascota->name}} </b></h4>
                            </a>
                        </td>
                        <td>
                            <p><b> {{ $mascota->species}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $mascota->race}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $mascota->age}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $mascota->color}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $mascota->size}} </b></p>
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
        function exportpetsToCSV(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
    @endsection