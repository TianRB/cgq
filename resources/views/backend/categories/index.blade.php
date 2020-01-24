@extends('layouts.back')
@section('content')
<div class="area-principal">

  <!-- ******************************** ESTÁ SECCIÓN MUESTRA LOS ARTÍCULOS EXISTENTES ******************************** -->
  <div class="area-principal-articulos">
    @foreach($categories as $c)
    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo -->
      <article>
        <section>
          <div class="texto-card-articulos">
            <h2>{{ $c->name }}</h2><!-- Título del artículo -->
          </div>
          <!-- BOTONES -->
          <div class="btns-notas">
            @if($c->slug !== 'sin-definir')
            <form action="{{ route('back.categories.destroy', ['id' => $c->id]) }}" method="POST" class="no-margin">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE" />
              <button class="btn btn-rectangle btn-raised btn-basura">
                <div class="ripple-container">
                  <span class="ripple-effect"></span>
                </div>
                <span class="icon-borrar"></span>
              </button>
            </form>
            @endif
          </div>
        </section>
      </article>
    </div>
    @endforeach
  </div>
</div>
@endsection