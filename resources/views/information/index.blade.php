@extends('layouts.dashboard')
@section('title', 'Información')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-11">
                    <h2 class="card-title">Información </h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-dark table-responsive">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Eslogan</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($information as $info)
                    <tr>
                        <td>
                            <p>{{ $info->name }}</p>
                            <p>{{ $info->shortName }}</p>
                        </td>
                        <td>
                            <p>{{ $info->phone }}</p>
                            <p>{{ $info->email }}</p>
                        </td>
                        <td>{{ $info->slogan }} </td>
                        <td><a class="btn btn-outline-info" href="{{route('information.edit', $info->id)}}"><i class="fas fa-edit"></i></a></td>

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
            $('#example').DataTable();
        });
    </script>

    <script>
        function exportpetsToCSV(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
    @endsection