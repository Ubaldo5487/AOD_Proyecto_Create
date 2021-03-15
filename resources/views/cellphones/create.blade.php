<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Formilario Para Agregar Un Celular</h1>

    <form action="{{ route('cellphones.store') }}" method="post">

        @csrf

        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Marca: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Modelo: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Color: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Número de camaras: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="camNumber" id="" placeholder="Número De Cámaras" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Cámara Trasera En Px: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="rearCamera_px" id="" placeholder="Cámara Trasera En Px" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Cámara Frontal En Px: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="frontalCamera_px" id="" placeholder="Cámara Frontal En Px" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Tamaño De Pantalla: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="screenSize" id="" placeholder="Tamaño De Pantalla" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Resolución De La Pantalla: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="screenResolution" id="" placeholder="Resolución De La Pantalla" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Capacidad De Memoria: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="memory" id="" placeholder="Memoria" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">RAM: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="ram" id="" placeholder="Número de ram" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Tipo De Sistema: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="typeOfSystem" id="" placeholder="Tipo De Sistema" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Versión De Sistema: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="systemVersion" id="" placeholder="Versión De Sistema" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Capacidad De Bateria: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="batteryCapacity" id="" placeholder="Capacidad De Bateria" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Velocidad De Carga: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="loadingspeed" id="" placeholder="Velocidad De Carga" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Descripción: </label>
            <div class="col-10">
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Comentario: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="comment" id="" placeholder="Comentario" required>
            </div>
        </div>
            <input class="btn btn-primary" type="submit" value="Guardar">

    </form>
</div>  