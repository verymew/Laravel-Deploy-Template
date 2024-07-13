@extends('layouts.idlab')

@section('content')

<head>
  <style>

  </style>
</head>

<div class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Início <i class="ion-ios-arrow-forward"></i></a></span></p>
          <h1 class="mb-3 bread">Novo Projeto</h1>
        </div>
      </div>
    </div>
</div>

<div class="form-div" style="width: 100%; display: flex; justify-content: center;">
    <form method="POST" action="/sendpost" style="margin: 20px 20px;">
      @csrf
      <label for="fname">Nome do projeto:</label><br>
      <input type="text" name="projname">
      <br>
      <label for="lname">Resumo:</label><br>
      <textarea style="height: 100px; width: 300px;" name="projcontent" placeholder="Digite seu texto aqui..."></textarea><br>
      <button type="submit">Enviar</button>
    </form>
</div>

@endsection