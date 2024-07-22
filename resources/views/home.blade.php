@extends('layouts.idlab')


@section('content')

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div id="barcar" class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
            <img class="one-third js-fullheight align-self-end order-md-first img-fluid" id="logo-img" src="images/Logo (3).svg" alt="">
          <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
              <div class="text mt-5" style="">
              <h1 class="mb-1">Ideas</h1><h1 style="color: rgb(110, 226, 100);">/Creative Lab</h1>
              <p>Espaço dedicado ao desenvolvimento de software com foco na criatividade e na experiência do usuário
              </p>
             <!--<p><a href="#" class="btn btn-secondary px-4 py-3">Sobre</a></p>-->
            </div>
          </div>
          </div>
    </div>
</div>

    <x-activities :activities="$activities"></x-activities>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Projetos</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                <div style="word-break: break-word !important;" class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex flex-column">
                        <div class="media-body pl-4 d-flex flex-column">
                            <h3 class="heading">{{ $project->title }}</h3>
                            <p>{{ $project->resume }}</p>
                            <div class="mt-auto">
                                <a href="" class="btn btn-secondary px-4 py-3">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
