@extends('layouts.back')
@section('content')
<!-- ******************************** ÁREA PARA CREAR LA NOTA ******************************** -->
<div class="contenedor-secundario">
  <!-- Este contenedor tiene tanto el aside derecho como el área para crear la nota -->
  <div class="div-izquierdo">
    <div class="modulo-medio sombra-1">
      <div class="header-gris">
        <h3>Artículo</h3>
      </div>
      <form action="{{ url('back/posts/'.$post->id) }}" method="POST" class="formulario-articulo" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT" />

        <div class="group">
          <input type="text" value="{{ $post->title }}" required name="title">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Título de la nota</label>
        </div>

        <div class="group">
          <input type="text" value="{{ $post->video }}" name="video">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Vídeo (opcional)</label>
        </div>

        <textarea class="ckeditor" id="ckeditor" name="content" required>{!! $post->content !!}</textarea>

        <div class="etiquetas-seo">
          <h5>Etiquetas SEO</h5>
          <div class="group">
            <input type="text" value="{{ $post->page_title }}" required name="page_title">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Etiqueta Title</label>
          </div>
          <div class="group">
            <input type="text" value="{{ $post->meta_descr }}" required name="meta_descr">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Etiqueta Meta Description</label>
          </div>
        </div>
    </div>
  </div> <!-- Esta etiqueta cierra toda la columna izquierda, la cual contiene el área para crear la nota -->

  <!-- ******************************** ASIDE ******************************** -->
  <div class="div-derecho">
    <!-- Esta etiqueta abre toda la columna derecha -->
    <div class="modulo-aside sombra-1">
      <div class="header-gris">
        <h3>Categorías</h3>
      </div>
      <!-- ******************************** CHECKBOX ******************************** -->

      <div class="radio-container">
        @foreach($categories as $c)
        <div class="check-awesome" class="form-group">
          <input type="radio" name="category" class="radio" value="{{ $c->id }}" checked>
          <label for="category">
            {{ $c->name }}
          </label>
        </div>
        @endforeach
      </div>

      <!-- ******************************** SUBIR FOTO ******************************** -->

      <h5>FOTO:</h5>
      <section class="contenedor-create foto-articulo contenedor-crear-foto-dos">
        <div class="subir-foto-articulo">
          <input name="image" id="input-file-2" type="file">
        </div>
      </section>



      <!-- ******************************** BOTONES ******************************** -->

      <div class="btns-create-article">
        <button class="btn btn-rectangle btn-raised" type="submit">
          <div class="ripple-container">
            <span class="ripple-effect"></span>
          </div>
          Terminar
        </button>

      </div>
    </div>
    </form>

    <!-- ******************************** INFORMACIÓN DE LA PUBLICACIÓN ******************************** -->

    <!-- <div class="modulo-aside sombra-1">
						<div class="header-gris">
							<h3>Información General</h3>
						</div>	
						<div class="informacion-general">
							<p><strong>Estado: </strong>Publicado</p>
							<p><strong>Fecha: </strong>20/marzo/2016</p>
							<p><strong>Autor: </strong>Ana Karen García</p>
						</div>

					</div> -->
  </div><!-- Esta etiqueta cierra toda la columna derecha -->
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
CKEDITOR.replace('ckeditor');

@if($errors -> any())
@foreach($errors -> all() as $error)
console.log('{!! $error !!}');
@endforeach
@endif
</script>
@endsection