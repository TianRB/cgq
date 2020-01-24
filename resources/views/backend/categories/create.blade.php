@extends('layouts.back')
@section('content')
<!-- ******************************** ÁREA PARA CREAR LA NOTA ******************************** -->
<div class="contenedor-secundario">
  <!-- Este contenedor tiene tanto el aside derecho como el área para crear la nota -->
  <div class="div-izquierdo">
    <div class="modulo-medio sombra-1">
      <div class="header-gris">
        <h3>Categoría Nueva</h3>
      </div>
      <form action="{{ route('back.categories.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="group">
          <input type="text" required name="name">
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Nombre</label>
        </div>

        <div class="btns-create-article">
          <button class="btn btn-rectangle btn-raised" type="submit">
            <div class="ripple-container">
              <span class="ripple-effect"></span>
            </div>
            Crear
          </button>
        </div>
      </form>
    </div>
  </div> <!-- Esta etiqueta cierra toda la columna izquierda, la cual contiene el área para crear la nota -->
</div>
@endsection