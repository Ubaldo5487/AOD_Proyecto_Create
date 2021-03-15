<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Formulario Para Agregar Una Canción</h1>

    <form action="{{ route('songs.store') }}" method="post">

        @csrf

        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Nombre:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="title" id="" placeholder="Nombre" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Álbum:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="album" id="" placeholder="Albúm" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Autor:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="autor" id="" placeholder="Autor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Género:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="genere" id="" placeholder="Género" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Duración:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="duration" id="" placeholder="Duración" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Fecha De Lanzamiento:</label>
            <div class="col-10">
                <input class="form-control" type="date" name="date" id="" placeholder="Fecha De Lanzamiento" required>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>

    </form>
</div>