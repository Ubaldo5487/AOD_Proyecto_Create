<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <h1>Formulario Para Agregar Un Pastel</h1>

    <form action="{{ route('cakes.store') }}" method="post">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre Del Cliente: </label>
                <input class="form-control" type="text" name="client_name" id="" placeholder="Nombre Del Cliente" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Dirección Del Cliente: </label>
                <input class="form-control" type="text" name="client_direction" id="" placeholder="Dirección Del Cliente" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Ingredientes: </label>
                <input class="form-control" type="text" name="ingredient" id="" placeholder="Ingredientes Adicionales" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sabor: </label>
                <input class="form-control" type="text" name="taste" id="" placeholder="Sabor Del Pastel" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad: </label>
                <input class="form-control" type="number" name="quantity" id="" placeholder="Número De Pasteles" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño: </label>
                <input class="form-control" type="text" name="size" id="" placeholder="Tamaño Del Pastel" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>