@extends('layouts.idlab')

@section('content')

<div class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Início <i class="ion-ios-arrow-forward"></i></a></span> <span>Projetos</span></p>
          <h1 class="mb-3 bread">Gerenciar projetos</h1>
        </div>
      </div>
    </div>
</div>


<x-projectmanage :projects="$projects"></x-projectmanage>

@endsection
