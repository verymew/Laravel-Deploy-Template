<section class="ftco-section bg-light">
    <div class="container">
      <div class="row">

        @foreach ($projects as $projects)
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('storage/' . $projects->image_path) }}');">
              </a>
              <div class="text d-flex py-3">
                <div class="desc pl-6">
                    <h3  style="overflow-wrap: break-word !important;" class="heading"><a href="#">{{ $projects->title }} </a></h3>
                </div>
                <p><a href="{{ route('showproject', ['postid' => $projects->id]) }}" class="btn btn-secondary px-4 py-3">Visualizar projeto</a></p>
              </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>



