<section class="ftco-section bg-light">
    <div class="container">
      <div class="row">

        @foreach ($projects as $projects)

        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <img style="max-width: 800px; max-heigth: 533px"src="{{ asset('storage/' . $projects->image_path) }}" alt="Imagem do Post">
            </a>
            <div class="text d-flex py-4">
              <div class="desc pl-3">
                <h3 class="heading"><a href="#">{{ $projects->title }}</h3>
                <p> {{ $projects->resume }} </p>
              </div>
              <p><a href="#" class="btn btn-secondary px-4 py-3">Visualizar projeto</a></p>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </section>

