@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="form-div" style="width: 100%; display: flex; justify-content: center;">

                <form method="POST" action="{{ route('project.updatePost', $projects->id) }}" enctype="multipart/form-data"
                    style="margin: 20px 20px;">
                    @csrf
                    @method('PUT')
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

                    <h1>Editar Projeto:</h1><br>
                    <label for="fname">Nome do projeto:</label><br>
                    <input value="{{$projects->title}}" type="text" name="projname">
                    <br>
                    <label for="lname">Resumo: </label><br>
                    <textarea style="height: 100px; width: 300px;" name="projresume">{{$projects->resume}}</textarea><br>
                    <label>Imagem do projeto: </label><br>
                    <input type="file" name="image" id="image">
                    <br>
                    <input type="hidden" id="custId" name="projeto_id" value="{{$projects->id}}">
                    <label>Postagem: </label>
                    <br>
                    <textarea style="height: 100px; width: 300px;" name="projcontent" placeholder="Escreva sobra o projeto aqui...">{{$projects->content}}</textarea><br>
                    <button class="btn btn-success" type="submit">Enviar</button>
                </form>
            </div>

        </div>
    </div>

@endsection
