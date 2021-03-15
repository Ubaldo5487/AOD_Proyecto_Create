<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Actualizar Datos De La Mascota <b>{{ $mascota->name}}</b></h1>

    <form action="{{ route('pets.update') }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="name" value="{{ $mascota->name }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Especie:</label>
                <input class="form-control" type="text" name="species" value="{{ $mascota->species }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Raza:</label>
                <input class="form-control" type="text" name="race" value="{{ $mascota->race }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Edad:</label>
                <input class="form-control" type="number" name="age" value="{{ $mascota->age }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" value="{{ $mascota->color }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño:</label>
                <input class="form-control" type="text" name="size" value="{{ $mascota->size }}" required>
            </div>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>