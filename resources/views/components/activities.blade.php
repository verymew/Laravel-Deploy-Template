<section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2>Atividades</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($activities as $activities)

        <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a class="block-20" style="background-image: url('{{ asset('storage/' . $activities->image_path) }}');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a>Data:</a></div>
                  <div><a>{{ \Carbon\Carbon::parse($activities->activity_date)->format('d/m/Y') }}</a></div>
                </div>
                <div class="desc pl-3">
                    <h3 class="heading"><a href="#">{{ $activities->title }}</a></h3>
                  </div>
              </div>
            </div>
        </div>

        @endforeach
      </div>
    </div>
  </section>
