@extends('layouts.dashboard')

@section('content')

<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2> {{ $song->title}} </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{route('songs.index')}}">
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
                        <th>Albúm</th>
                        <th>Autor</th>
                        <th>Género</th>
                        <th>Duración</th>
                        <th>Fecha De Lanzamiento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        </td>
                        <td>
                            <p><b> {{ $song->album}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $song->autor}} </b></p>
                        </td>
                        <td>
                            <p><b> {{ $song->genere}} </b></p>
                        </td>
                        <td>
                            <p><b> {{$song->duration}} </b></p>
                        </td>
                        <td>
                            <p><b> {{$song->date}} </b></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{route('songs.edit', $song->id)}}">
                        Editar</a>
                    <form action=" {{route('songs.destroy', $song->id)}} " method="post">
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