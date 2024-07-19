@extends('layouts.idlab')

@section('content')

    <x-subheader title="Atualizar projeto"></x-subheader>

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

    <div class="form-div" style="width: 100%; display: flex; justify-content: center;">
        <form method="POST" action="{{ route('project.updatePost') }}"  enctype="multipart/form-data" style="margin: 20px 20px;">
          @csrf
          @method('PUT')

          <label for="fname">Nome do projeto:</label><br>
          <input type="text" name="projname" value="{{ $projects->title }}"><br>
          <br>
          <label for="lname">Resumo:</label><br>
          <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um texto pequeno para chamar atenção...">{{ $projects->resume }}</textarea><br>
          <label>Imagem do projeto: </label><br>
          <input type="file" name="image" id="image">
          <br>
          <label>Postagem: </label>
          <br>
          <textarea value="oiii" style="height: 100px; width: 300px;" name="projcontent" placeholder="Escreva sobra o projeto aqui...">{{ $projects->content }}</textarea><br>
          <input type="hidden" name="projeto_id" value="{{ $projects->id }}">
          <button type="submit">Enviar</button>
        </form>
    </div>

@endsection
