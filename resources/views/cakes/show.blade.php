<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2> {{ $cake->client_name}} </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('cakes.index')}}">
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
                    <tr>
                        <td>
                            <p>Imagen</p>
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
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{route('cakes.edit', $cake->id)}}">
                        Editar</a>
                    <form action=" {{route('cakes.destroy', $cake->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>