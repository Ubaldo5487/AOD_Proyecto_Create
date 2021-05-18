@extends('layouts.dashboard')

@section('content')

<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2> {{ $cellphone->brand}} </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('cellphones.index')}}">
                            < Regresar</a>
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
                    <tr>
                        <td>
                            <p>Imagen</p>
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
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{route('cellphones.edit', $cellphone->id)}}">
                        Editar</a>
                    <form action=" {{route('cellphones.destroy', $cellphone->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection