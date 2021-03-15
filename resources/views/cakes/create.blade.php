<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Formilario Para Agregar Un Pastel</h1>

    <form action="{{ route('cakes.store') }}" method="post">

        @csrf

        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Nombre Del Cliente: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="client_name" id="" placeholder="Nombre Del Cliente" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Dirección Del Cliente: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="client_direction" id="" placeholder="Dirección Del Cliente" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Ingredientes: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="ingredient" id="" placeholder="Ingredientes Adicionales" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Sabor: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="taste" id="" placeholder="Sabor Del Pastel" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Cantidad: </label>
            <div class="col-10">
                <input class="form-control" type="number" name="quantity" id="" placeholder="Número De Pasteles" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Tamaño: </label>
            <div class="col-10">
                <input class="form-control" type="text" name="size" id="" placeholder="Tamaño Del Pastel" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 text-end" for="">Descripción: </label>
            <div class="col-10">
            <input class="form-control" type="text" name="description" id="" placeholder="Descipción" required>
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