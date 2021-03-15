<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

@forelse ($pasteles as $cake)
<h1>Nombre: {{ $cake->client_name}}</h1>
<p>Dirección: {{ $cake->client_direction}}</p>
<p>Ingredientes Adicionales: {{ $cake->ingredient}} </p>
<p>Sabor: {{ $cake->taste}} </p>
<p>Cantidad: {{ $cake->quantity}} </p>
<p>Tamaño: {{ $cake->size}} </p>
<p>Descripción: {{ $cake->description}} </p>
<p>Comentario: {{ $cake->comment}} </p>
<br>

@empty
<h1>La tabla no tiene datos</h1>

@endforelse