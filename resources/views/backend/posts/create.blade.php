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
      <form action="" class="formulario-articulo">
        <!--<div class="group">      
	    						<input type="text" required>
	    						<span class="highlight"></span>
	    						<span class="bar"></span>
	    						<label>URL del Video</label>
	  						</div>-->
        <div class="group">
          <input type="text" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Título de la nota</label>
        </div>

        <div class="group">
          <input type="text" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Vídeo (opcional)</label>
        </div>

        <textarea>Easy (and free!) You should check out our premium features.</textarea>

        <div class="etiquetas-seo">
          <h5>Etiquetas SEO</h5>
          <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Etiqueta Title</label>
          </div>
          <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Etiqueta Meta Description</label>
          </div>
        </div>
      </form>
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

      <div class="checkbox-container">
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox" checked>
          <label for="check-me">
            Esófago
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Colon
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Intestino Delgado
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Apéndice
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Bazo
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Páncreas
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Riñones
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Vesícula
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Tiroides
          </label>
        </div>
        <div class="check-awesome" class="form-group">
          <input type="checkbox" class="checkbox">
          <label for="check-me">
            Ano
          </label>
        </div>
      </div>

      <!-- ******************************** SUBIR FOTO ******************************** -->

      <h5>FOTO:</h5>
      <section class="contenedor-create foto-articulo contenedor-crear-foto-dos">
        <div class="subir-foto-articulo">
          <form action="process-form.php">
            <input name="input-file-2" id="input-file-2">
          </form>
        </div>
      </section>



      <!-- ******************************** BOTONES ******************************** -->

      <div class="btns-create-article">
        <button class="btn btn-rectangle btn-raised">
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
@endsection
