@extends('layouts.idlab')

@section('content')

<x-subheader title="Contato"></x-subheader>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Seu e-mail">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Assunto">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar mensagem" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6" style="background-color: aliceblue;">
        </div>
      </div>
    </div>
</section>

@endsection
