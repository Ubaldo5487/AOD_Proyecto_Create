@extends('layouts.dashboard')

@section ('title', 'Cards-Pasteles')

@section ('content')

<div class="row">
    @forelse($pasteles as $pastel)
    <!--Renderizar datos-->
    <div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mb-3 mr-2 ml-2">
        <div class="card-header">
            <h2 class="text-primary">{{$pastel->client_name}} {{$pastel->client_direction}}</h2>
        </div>
        <div class="card-body">
            <p class="card-text text-truncate">{{$pastel->description}}</p>
            <div class="">
                <p class="text-muted">Sabor: {{$pastel->taste}}</p>
            </div>
            <div class="">
                <p class="text-muted">Ingrediente: {{$pastel->ingredient}}</p>
            </div>
        </div>
        <div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-outline-info padding-left mr-2" href="#"><i class="fas fa-info-circle"></i> Ver más</a>
        </div>
    </div>
    @empty
    <!--Mensaje por si no encuentra datos-->
    <h3>No hay registros en la base de datos</h3>
    @endforelse
</div>

@endsection