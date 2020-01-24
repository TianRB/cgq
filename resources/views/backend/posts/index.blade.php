@extends('layouts.back')
@section('content')
<div class="area-principal">
  <!-- ******************************** ESTÁ SECCIÓN CONTIENE LOS FILTROS DE BUSQUEDA ******************************** -->
  <div class="sombra-1 modulo-largo">
    <div class="header-gris">
      <h3>Filtro de búsqueda de artículos</h3>
    </div>

    <div class="filtro-notas">

      <div class="grupo-filtro-notas">
        <span class="triangulito"></span>
        <select class="browser-default" id="puesto" name="puesto">
          <option value="" disabled selected>Categoría</option>
          <option value="Editor" class="editor">Nuevos productos</option>
          <option value="Reportero">Seguridad vial</option>
          <option value="Jefe de Redacción">Protección general</option>
          <option value="Jefe de Redacción">Protección visual</option>
          <option value="Jefe de Redacción">Protección para manos</option>
          <option value="Jefe de Redacción">Protección auditiva</option>
          <option value="Jefe de Redacción">Protección para lluvias</option>
          <option value="Jefe de Redacción">Protección respiratoria</option>
        </select>
      </div>

      <div>
        <div class="btn-filtro buscador">
          <input type="text" placeholder="Buscar">
          <span class="icon-menu"></span>
        </div>
      </div>

    </div>
  </div>


  <!-- ******************************** ESTÁ SECCIÓN MUESTRA LOS ARTÍCULOS EXISTENTES ******************************** -->
  <div class="area-principal-articulos">
    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo UNO -->
      <article>
        <figure><img src="img/casco.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>


    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo DOS -->
      <article>
        <figure><img src="img/protector-facial-1.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>

    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo UNO -->
      <article>
        <figure><img src="img/careta-soldador.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>

    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo UNO -->
      <article>
        <figure><img src="img/diadema.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>

    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo DOS -->
      <article>
        <figure><img src="img/protector-facial-1.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>

    <div class="sombra-1 modulo-largo lista-articulos">
      <!-- Articulo DOS -->
      <article>
        <figure><img src="img/protector-facial-1.png" alt=""></figure><!-- Foto del artículo -->
        <section>
          <div class="texto-card-articulos">
            <h2>Título de la nota</h2><!-- Título del artículo -->
            <div class="contenido">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</div><!-- Extracto del artículo -->
            <div class="datos-publi">
              <div><strong>Categoría:</strong> Fulano de Tal</div> <!-- Autor -->
              <div><strong>Fecha:</strong>23/05/2016</div> <!-- Fecha de publicación -->
            </div>
          </div>

          <!-- BOTONES -->
          <div class="btns-notas">
            <button class="btn btn-rectangle btn-raised">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              Editar
            </button>
            <button class="btn btn-rectangle btn-raised btn-basura">
              <div class="ripple-container">
                <span class="ripple-effect"></span>
              </div>
              <span class="icon-borrar"></span>
            </button>
          </div>
        </section>
      </article>
    </div>
  </div>
</div>
@endsection