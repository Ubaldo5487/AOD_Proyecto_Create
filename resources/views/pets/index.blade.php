<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

@forelse ($pets as $pet)
<h1>Nombre: {{ $pet->name}}</h1>
<p>Especie: {{ $pet->species}}</p>
<p>Raza: {{ $pet->race}}</p>
<p>Edad: {{ $pet->age}}</p>
<p>Color: {{$pet->Color}}</p>
<p>Tamaño: {{$pet->size}}</p>
<br>


@empty
<h1>La tabla no tiene datos</h1>

@endforelse