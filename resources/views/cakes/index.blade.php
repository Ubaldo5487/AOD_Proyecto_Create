<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado De Pasteles Registrados En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('cakes.create')}}">+ Nuevo</a>
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