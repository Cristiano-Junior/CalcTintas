@extends('layouts.app')

@push('styles')
<link href="{{ asset('src/css/main.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
  <div class="form">
    <div class="row">
      <div class="card">
        <h2 class="card-title">Parede 1</h2>
        <div class="card-content">
          <label for="wall1-width">Largura:</label>
          <input class="custom-input metros" type="text" id="wall1-width" name="width-1" placeholder="Digite a largura (em metros)">

          <label for="wall1-height">Altura:</label>
          <input class="custom-input metros" type="text" id="wall1-height" name="height-1" placeholder="Digite a altura (em metros)">

          <label for="wall1-doors">Portas:</label>
          <input class="custom-input unidades" type="text" id="wall1-doors" name="doors-1" placeholder="Digite o número de portas">

          <label for="wall1-windows">Janelas:</label>
          <input class="custom-input unidades" type="text" id="wall1-windows" name="windows-1" placeholder="Digite o número de janelas">
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Parede 2</h2>
        <div class="card-content">
          <label for="wall2-width">Largura:</label>
          <input class="custom-input metros" type="text" id="wall2-width" name="width-2" placeholder="Digite a largura (em metros)">

          <label for="wall2-height">Altura:</label>
          <input class="custom-input metros" type="text" id="wall2-height" name="height-2" placeholder="Digite a altura (em metros)">

          <label for="wall2-doors ">Portas:</label>
          <input class="custom-input unidades" type="text" id="wall2-doors" name="doors-2" placeholder="Digite o número de portas">

          <label for="wall2-windows">Janelas:</label>
          <input class="custom-input unidades" type="text" id="wall2-windows" name="windows-2" placeholder="Digite o número de janelas">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <h2 class="card-title">Parede 3</h2>
        <div class="card-content">
          <label for="wall3-width">Largura:</label>
          <input class="custom-input metros" type="text" id="wall3-width" name="width-3" placeholder="Digite a largura (em metros)">

          <label for="wall3-height">Altura:</label>
          <input class="custom-input metros" type="text" id="wall3-height" name="height-3" placeholder="Digite a altura (em metros)">

          <label for="wall3-doors">Portas:</label>
          <input class="custom-input unidades" type="text" id="wall3-doors" name="doors-3" placeholder="Digite o número de portas">

          <label for="wall3-windows">Janelas:</label>
          <input class="custom-input unidades" type="text" id="wall3-windows" name="windows-3" placeholder="Digite o número de janelas">
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Parede 4</h2>
        <div class="card-content">
          <label for="wall4-width">Largura:</label>
          <input class="custom-input metros" type="text" id="wall4-width" name="width-4" placeholder="Digite a largura (em metros)">

          <label for="wall4-height">Altura:</label>
          <input class="custom-input metros" type="text" id="wall4-height" name="height-4" placeholder="Digite a altura (em metros)">

          <label for="wall4-doors">Portas:</label>
          <input class="custom-input unidades" type="text" id="wall4-doors" name="doors-4" placeholder="Digite o número de portas">

          <label for="wall4-windows">Janelas:</label>
          <input class="custom-input unidades" type="text" id="wall4-windows" name="windows-4" placeholder="Digite o número de janelas">
        </div>
      </div>
    </div>
  </div>
  <div class="result">
    <div class="row">
      <div class="card">
        <h2 class="card-title">Informações importantes</h2>
        <div class="card-content">
          <strong>Medidas da janela:</strong>
          <label>Largura: 2,00</label>
          <label>Altura: 1,20</label><br>

          <strong>Medidas da porta:</strong>
          <label>Largura: 0,80</label>
          <label>Altura: 1,90</label>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Resultados</h2>
        <div class="card-content">
          <div id="showResult"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <button type="button" id="calc">Calcular</button>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('src/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('src/js/jquery.mask.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('src/js/main.js') }}" type="module"></script>
@endpush