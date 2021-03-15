<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado De Mascotas Registradas En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('pets.create')}}">+ Nuevo</a>
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
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Color</th>
                    <th>Tamaño</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pets as $mascota)
                <tr>
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
                        <p><b> {{$mascota->color}} </b></p>
                    </td>
                    <td>
                        <p><b> {{$mascota->size}} </b></p>
                    </td>

                    @empty
                    <h1>La tabla no tiene datos</h1>

                </tr>

                @endforelse
            </tbody>
        </table>

    </div>
</div>