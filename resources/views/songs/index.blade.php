<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

@forelse ($datos as $dato)

<h3>Nombre: {{ $dato->title}}</h3>
<p>Albúm: {{ $dato->album}}</p>
<p>Autor: {{ $dato->autor}}</p>
<p>Género: {{ $dato->genere}}</p>
<p>Duración: {{$dato->duration}}</p>
<p>Fecha De Lanzamiento: {{$dato->date}}</p>
<br>


@empty
<h1>La tabla no tiene datos</h1>

@endforelse