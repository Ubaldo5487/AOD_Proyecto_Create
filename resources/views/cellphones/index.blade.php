<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<div class="container">
    <br><br>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado De Celulares Registrados En La Base De Datos </h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('cellphones.create')}}">+ Nuevo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Número De Cámaras</th>
                    <th>Cámara Trasera En Px</th>
                    <th>Cámara Frontal En Px</th>
                    <th>Tamaño De Pantalla</th>
                    <th>Resolución De La Pantalla</th>
                    <th>Capacidad De Memoria</th>
                    <th>RAM</th>
                    <th>Tipo De Sistema</th>
                    <th>Versión De Sistema</th>
                    <th>Capacidad De Bateria</th>
                    <th>Velocidad De Carga</th>
                    <th>Descripción</th>
                    <th>Comentario</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($celulares as $cellphone)
                <tr>
                    <td>
                        <a class="btn btn-info btn-small" href="{{route('cellphones.show', $cellphone->id)}}">
                            <h4><b> {{ $cellphone->brand}} </b></h4>
                        </a>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->model}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->color}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->camNumber}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->rearCamera_px}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->frontalCamera_px}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->screenSize}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->screenResolution}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->memory}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->ram}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->typeOfSystem}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->systemVersion}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->batteryCapacity}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->loadingspeed}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->description}} </b></p>
                    </td>
                    <td>
                        <p><b> {{ $cellphone->comment}} </b></p>
                    </td>

                    @empty
                    <h1>La tabla no tiene datos</h1>

                </tr>

                @endforelse
            </tbody>
        </table>

    </div>
</div>