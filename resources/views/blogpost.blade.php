@extends('layouts.idlab')

@section('content')

<x-subheader title="{{ $project->title }}"></x-subheader>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div  class="col-lg-8 ftco-animate" style="overflow-wrap: break-word !important;">
          <p>
            <img src="{{ asset('storage/' . $project->image_path) }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">{{ $project->title }}</h2>
          <p>{{ $project->content }}
          </p>
        </div>
     </div>
    </div>
</section>

@endsection
