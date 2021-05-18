@extends('layouts.dashboard')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{route('songs.create')}}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado De Canciones Registradas En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/songs/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/songs/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/songs/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{url('/songs/exportToXlsx')}}"><i class="fas fa-file-excel"></i></a>
                        <span onclick="exportsongsToCSV(event.target)" data-href="/exportsongsToCSV" id="export" class="btn btn-outline-info"><i class="fas fa-file-csv"></i></span>
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
                        <th>Albúm</th>
                        <th>Autor</th>
                        <th>Género</th>
                        <th>Duración</th>
                        <th>Fecha De Lanzamiento</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($datos as $song)
                    <tr>
                        <td>
                            <img style="width: 150px; height: 150px;" src="/imagenes/songs/{{ $song->image }}" alt="{{ $song->title }} {{ $song->autor }}" />
                        </td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{route('songs.show', $song->id)}}">
                                <h4><b> {{ $song->title}} </b></h4>
                            </a>
                        </td>
                        <td>
                            <p><b> {{ $song->album}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $song->autor}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $song->genere}} </b></p>
                        </td>
                        <td>
                            <p><b> {{$song->duration}} </b></p>
                        </td>
                        <td>
                            <p><b> {{$song->date}} </b></p>
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
        function exportsongsToCSV(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
    @endsection