@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>Formulario Para Agregar Un Celular</h1>

    <form action="{{ route('cellphones.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen:</label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class=" form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class=" form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class=" form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de camaras: </label>
                <input class=" form-control" type="number" name="camNumber" id="" placeholder="Número De Cámaras" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cámara Trasera En Px: </label>
                <input class=" form-control" type="number" name="rearCamera_px" id="" placeholder="Cámara Trasera En Px" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cámara Frontal En Px: </label>
                <input class=" form-control" type="number" name="frontalCamera_px" id="" placeholder="Cámara Frontal En Px" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño De Pantalla: </label>
                <input class=" form-control" type="text" name="screenSize" id="" placeholder="Tamaño De Pantalla" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Resolución De La Pantalla: </label>
                <input class=" form-control" type="text" name="screenResolution" id="" placeholder="Resolución De La Pantalla" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad De Memoria: </label>
                <input class=" form-control" type="number" name="memory" id="" placeholder="Memoria" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">RAM: </label>
                <input class=" form-control" type="number" name="ram" id="" placeholder="Número de ram" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo De Sistema: </label>
                <input class=" form-control" type="text" name="typeOfSystem" id="" placeholder="Tipo De Sistema" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Versión De Sistema: </label>
                <input class=" form-control" type="text" name="systemVersion" id="" placeholder="Versión De Sistema" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad De Bateria: </label>
                <input class=" form-control" type="number" name="batteryCapacity" id="" placeholder="Capacidad De Bateria" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad De Carga: </label>
                <input class=" form-control" type="number" name="loadingspeed" id="" placeholder="Velocidad De Carga" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>

@endsection