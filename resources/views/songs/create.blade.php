@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>Formulario Para Agregar Una Canción</h1>

    <form action="{{ route('songs.store') }}" method="post" enctype="multipart/form-data">

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
                <input class="form-control" type="text" name="title" id="" placeholder="Nombre" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Álbum:</label>
                <input class="form-control" type="text" name="album" id="" placeholder="Albúm" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Autor:</label>
                <input class="form-control" type="text" name="autor" id="" placeholder="Autor" required>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Género:</label>
                <input class="form-control" type="text" name="genere" id="" placeholder="Género" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Duración:</label>
                <input class="form-control" type="text" name="duration" id="" placeholder="Duración" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Fecha De Lanzamiento:</label>
                <input class="form-control" type="date" name="date" id="" placeholder="Fecha De Lanzamiento" required>
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