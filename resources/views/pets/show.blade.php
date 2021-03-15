<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2> {{ $mascota->name}} </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('pets.index')}}">
                            < Regresar</a>
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
                    <tr>
                        <td>
                            <p>Imagen</p>
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
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{route('pets.edit', $mascota->id)}}">
                        Editar</a>
                    <form action=" {{route('pets.destroy', $mascota->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>