@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="form-div" style="width: 100%; display: flex; justify-content: center;">

            <form method="POST" action="{{ route('project.newpost') }}" enctype="multipart/form-data" style="margin: 20px 20px;">
              @csrf
              @method('POST')
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Voltar</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Novo Projeto</li>
                </ol>
              </nav>

              @if (session('success'))
                <div class="alert alert-success" style="text-align: center">
                    {{ session('success') }}
                </div>
              @endif


              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
              @endif

              <h1>Novo Projeto</h1><br>
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
              <button class="btn btn-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection
