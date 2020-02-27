@extends('layouts.app')
@section('content')


<div class="nota">
  <article class="articulo-nota">
      @if($post->video !== '')
        <div class="contenedor-video">
          <iframe src="{{ $post->video }}" allowfullscreen></iframe>
        </div>
      @else
          <figure><img src="{{ asset($post->image) }}" alt="{{ $post->slug }}"></figure>
      @endif
    <section>
      <h1>{{ $post->title }}</h1>
      {!! $post->content !!}
    </section>
    <div class="fb-comments" data-href="https://www.facebook.com/centro.endoscoquirurgico.ceq/" data-width="100%" data-numposts="5"></div>
  </article>

  <aside>
    <h3>Otros artículos médicos</h3>
    @foreach($related as $p)
    <a href="{{ url('/nota/'.$p->slug) }}">
      <article>
        <figure><img src="{{ asset($p->image) }}" alt="{{ $p->slug }}"></figure>
        <h4>{{ $p->title }}</h4>
        {!! str_limit($p->content, $limit=100, $end='...') !!}
      </article>
    </a>
    @endforeach

  </aside>

</div>
@endsection
