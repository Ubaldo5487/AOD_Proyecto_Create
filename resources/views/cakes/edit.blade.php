@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Actualizar Datos Del Pastel De <b>{{ $cake->client_name}}</b></h1>

    <form action="{{ route('cakes.update', $cake->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre Del Cliente: </label>
                <input class="form-control" type="text" name="client_name" value="{{ $cake->client_name }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Dirección Del Cliente: </label>
                <input class="form-control" type="text" name="client_direction" value="{{ $cake->client_direction }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Ingredientes: </label>
                <input class="form-control" type="text" name="ingredient" value="{{ $cake->ingredient }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sabor: </label>
                <input class="form-control" type="text" name="taste" value="{{ $cake->taste }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad: </label>
                <input class="form-control" type="number" name="quantity" value="{{ $cake->quantity }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño: </label>
                <input class="form-control" type="text" name="size" value="{{ $cake->size }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required> {{ $cake->description }} </textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" value="{{ $cake->comment }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>

@endsection