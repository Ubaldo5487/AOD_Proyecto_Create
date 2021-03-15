<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Formilario Para Agregar Una Mascota</h1>

    <form action="{{ route('pets.store') }}" method="post">

        @csrf

        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Nombre:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Especie:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="species" id="" placeholder="Especie" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Raza:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="race" id="" placeholder="Raza" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Edad:</label>
            <div class="col-10">
                <input class="form-control" type="number" name="age" id="" placeholder="Edad" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Color:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Tamaño:</label>
            <div class="col-10">
                <input class="form-control" type="text" name="size" id="" placeholder="Tamaño" required>
            </div>
        </div>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>

    </form>
</div>