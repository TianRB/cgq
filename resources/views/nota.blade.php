@extends('layouts.app')
@section('content')


<div class="nota">
  <article class="articulo-nota">
    <figure><img src="{{ asset($post->image) }}" alt="{{ $post->slug }}"></figure>
    <section>
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
        {!! $p->content !!}
      </article>
    </a>
    @endforeach

  </aside>

</div>
@endsection