<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

@forelse ($celulares as $cellphone)

<h3>Celular: {{ $cellphone->brand}} {{ $cellphone->model}}</h3>
<p>Color : {{ $cellphone->color}}</p>
<p>Número De Cámaras : {{ $cellphone->camNumber}}</p>
<p>Cámara Trasera En Px:{{ $cellphone->rearCamera_px}}</p>
<p>Cámara Frontal En Px: {{ $cellphone->frontalCamera_px}}</p>
<p>Tamaño De Pantalla: {{ $cellphone->screenSize}}</p>
<p>Resolución De La Pantalla: {{ $cellphone->screenResolution}}</p>
<p>RAM: {{ $cellphone->ram}}</p>
<p>Tipo De Sistema: {{ $cellphone->typeOfSystem}}</p>
<p>Versión De Sistema: {{ $cellphone->systemVersion}}</p>
<p>Capacidad De Bateria: {{ $cellphone->batteryCapacity}}</p>
<p>Velocidad De Carga: {{ $cellphone->loadingspeed}}</p>
<p>Descrición: {{ $cellphone->description}}</p>
<p>Comentario: {{ $cellphone->comment}}</p>
<br>

@empty
<h1>La tabla no tiene datos</h1>

@endforelse