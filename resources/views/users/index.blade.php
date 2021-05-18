@extends('layouts.dashboard')

@section('content')

<div class="">
    <br><br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado De Usuarios Registrados En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <span onclick="exportsongsToCSV(event.target)" data-href="/exportsongsToCSV" id="export" class="btn btn-info"> Exportar A CSV </span>
                        <a class="btn btn-primary" href="{{route('users.create')}}">+ Nuevo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="example" class="table table-dark table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>
                        <p><b> {{ $user->id}} </b></p>
                    </td>
                    <td>
                        <a class="btn btn-info btn-small" href="{{route('users.show', $user->id)}}">
                            <h4><b> {{ $user->name}} </b></h4>
                        </a>
                    </td>
                    <td>
                        <p><b> {{ $user->email}} </b></p>
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
        $('#example').DataTable();
    });
</script>

<script>
    function exportsongsToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>
@endsection