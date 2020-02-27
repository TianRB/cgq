@extends('layouts.app')
@section('content')

<!-- EL CONTENIDO VA AQUI -->

<div class="contenedor-blog">
	<div class="blog grid">

      @foreach($posts as $p)
			<article class="grid-item">
				<section>
					<figure><img src="{{ asset($p->image) }}" alt=""></figure>
						<div>
							<h2>{{ $p->title }}</h2>
							<p>{!! str_limit($p->content, $limit=100, $end='...') !!}</p>
							<a href="{{ url('/nota/'.$p->title) }}"><div class="btn">Ver más</div></a>
						</div>
				</section>
			</article>
      @endforeach
		</div>
		<div class="categorias">
		<nav>
      <form method="POST" action="{{ url('blog/') }}" class="buscador">
        {{ csrf_field() }}
				<input type="text" placeholder="Buscar" name="search">
			</form>
			<h3>Categorías</h3>
			<ul>
        @foreach($categories as $c)
            @if($c->slug !== 'sin-definir')
                <li><a href="{{ url('/blog/'.$c->slug) }}">{{ $c->name }}</a></li>
            @endif
        @endforeach
			</ul>
		</nav>
	</div>

</div>

@endsection
