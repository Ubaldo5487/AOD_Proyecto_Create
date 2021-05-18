@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>Formulario Para Agregar Una Mascota</h1>

    <form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                <label for="">Imagen:</label>
                <input type="file" name="image" id="" accept="image/*" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Especie:</label>
                <input class="form-control" type="text" name="species" id="" placeholder="Especie" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Raza:</label>
                <input class="form-control" type="text" name="race" id="" placeholder="Raza" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Edad:</label>
                <input class="form-control" type="number" name="age" id="" placeholder="Edad" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño:</label>
                <input class="form-control" type="text" name="size" id="" placeholder="Tamaño" required>
            </div>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>

@endsection