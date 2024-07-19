@extends('layouts.idlab')

@section('content')

<x-subheader title="Nova atividade"></x-subheader>

<div class="form-div" style="width: 100%; display: flex; justify-content: center;">
    <form method="POST" action="{{ route('profile.newproject') }}" enctype="multipart/form-data" style="margin: 20px 20px;">
      @csrf
      <label for="fname">Nome do projeto:</label><br>
      <input type="text" name="projname">
      <br>
      <label for="lname">Resumo:</label><br>
      <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um texto pequeno para chamar atenção..."></textarea><br>
      <label>Imagem do projeto: </label><br>
      <input type="file" name="image" id="image">
      <br>
      <label>Postagem: </label>
      <br>
      <textarea style="height: 100px; width: 300px;" name="projcontent" placeholder="Escreva sobra o projeto aqui..."></textarea><br>
      <button type="submit">Enviar</button>
    </form>
</div>

@endsection
