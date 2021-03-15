<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado De Canciones Registradas En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('songs.create')}}">+ Nuevo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">

            <thead>
                <tr>
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