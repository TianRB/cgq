@extends('layouts.back')
@section('content')
<!-- ******************************** ÁREA PARA CREAR LA NOTA ******************************** -->
<div class="contenedor-secundario contenedor-crear-nota">
  <!-- Este contenedor tiene tanto el aside derecho como el área para crear la nota -->
  <div class="div-izquierdo">
    <div class="modulo-medio sombra-1">
      <div class="header-gris">
        <h3>Artículo</h3>
      </div> 
      <form enctype="multipart/form-data" action="{{ route('back.posts.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="group">
          <input type="text" value="{{ old('title') }}" required name="title">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Título de la nota</label>
        </div>

        <div class="group">
          <input type="text" value="{{ old('video') }}" name="video">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Vídeo (opcional)</label>
        </div>

        <textarea class="ckeditor" id="ckeditor" name="content" required>{!! old('content') !!}</textarea>

        <div class="etiquetas-seo">
          <h5>Etiquetas SEO</h5>
          <div class="group">
            <input type="text" value="{{ old('page_title') }}" required name="page_title">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Etiqueta Title</label>
          </div>
          <div class="group">
            <input type="text" value="{{ old('meta_descr') }}" required name="meta_descr">
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

      <div class="radio-container checkbox-container">

        @foreach($categories as $c)
        <div class="check-awesome" class="form-group">
          <input type="checkbox" name="category" class="checkbox" value="{{ $c->id }}">
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
          Crear
        </button>
        <button class="btn btn-rectangle btn-flat">
          <div class="ripple-container">
            <span class="ripple-effect"></span>
          </div>
          Eliminar
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