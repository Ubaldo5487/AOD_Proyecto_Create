@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>Actualizar Datos De La Canción <b>{{ $song->title}}</b></h1>

    <form action="{{ route('songs.update', $song->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="title" value="{{ $song->title }}"  required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Álbum:</label>
                <input class="form-control" type="text" name="album" value="{{ $song->album }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Autor:</label>
                <input class="form-control" type="text" name="autor" value="{{ $song->autor }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Género:</label>
                <input class="form-control" type="text" name="genere" value="{{ $song->genere }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Duración:</label>
                <input class="form-control" type="text" name="duration" value="{{ $song->duration }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Fecha De Lanzamiento:</label>
                <input class="form-control" type="date" name="date" value="{{ $song->date }}" required>
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