@extends('layouts.idlab')

@section('content')
    <x-subheader title="Quem somos"></x-subheader>

    <section class="ftco-section bg-light">
        <div style="text-align: center;">
            <h1>Docentes</h1>
            <br>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($professor as $professor)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch"
                                    style="background-image: url({{ asset('storage/' . $professor->image_path) }});"></div>
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>{{ $professor->title }}</h3>
                            <span class="position mb-2">Docente</span>
                            <div class="faded">
                                <p>{{ $professor->resume }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div style="text-align: center;">
            <h1>Bolsistas</h1>
            <br>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($students as $students)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch"
                                    style="background-image: url({{ asset('storage/' . $students->image_path) }});"></div>
                            </div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3>{{ $students->title }}</h3>
                            <span class="position mb-2">Estudante</span>
                            <div class="faded">
                                <p>{{ $students->resume }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection
