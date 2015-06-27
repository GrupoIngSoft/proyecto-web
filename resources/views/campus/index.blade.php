<p>Probando listado de campus</p>

<ul>
@foreach($campus as $camp)
<li>{{ $camp->nombre }}</li>
@endforeach
</ul>
