@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>Actualizar Datos Del Celular <b>{{ $cellphone->brand}}</b></h1>

    <form action="{{ route('cellphones.update', $cellphone->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class=" form-control" type="text" name="brand" value="{{ $cellphone->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class=" form-control" type="text" name="model" value="{{ $cellphone->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class=" form-control" type="text" name="color" value="{{ $cellphone->color }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de camaras: </label>
                <input class=" form-control" type="number" name="camNumber" value="{{ $cellphone->camNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cámara Trasera En Px: </label>
                <input class=" form-control" type="number" name="rearCamera_px" value="{{ $cellphone->rearCamera_px }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cámara Frontal En Px: </label>
                <input class=" form-control" type="number" name="frontalCamera_px" value="{{ $cellphone->frontalCamera_px }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño De Pantalla: </label>
                <input class=" form-control" type="text" name="screenSize" value="{{ $cellphone->screenSize }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Resolución De La Pantalla: </label>
                <input class=" form-control" type="text" name="screenResolution" value="{{ $cellphone->screenResolution }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad De Memoria: </label>
                <input class=" form-control" type="number" name="memory" value="{{ $cellphone->memory }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">RAM: </label>
                <input class=" form-control" type="number" name="ram" value="{{ $cellphone->ram }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo De Sistema: </label>
                <input class=" form-control" type="text" name="typeOfSystem" value="{{ $cellphone->typeOfSystem }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Versión De Sistema: </label>
                <input class=" form-control" type="text" name="systemVersion" value="{{ $cellphone->systemVersion }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad De Bateria: </label>
                <input class=" form-control" type="number" name="batteryCapacity" value="{{ $cellphone->batteryCapacity }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad De Carga: </label>
                <input class=" form-control" type="number" name="loadingspeed" value="{{ $cellphone->loadingspeed }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required> {{ $cellphone->description }} </textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $cellphone->comment }}"">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>
@endsection