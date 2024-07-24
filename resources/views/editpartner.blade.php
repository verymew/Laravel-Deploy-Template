@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="form-div" style="width: 100%; display: flex; justify-content: center;">
                <form method="POST" action="{{ route('team.put') }}" enctype="multipart/form-data"
                    style="margin: 20px 20px;">
                    @csrf
                    @method('PUT')
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Voltar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar Atividade</li>
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


                    <label for="fname">Nome do integrante:</label><br>
                    <input value="{{ $partner->title }}" type="text" name="projname"><br>
                    <br>
                    <label for="lname">Sobre:</label><br>
                    <textarea style="height: 100px; width: 300px;" name="projresume"
                        placeholder="Um texto pequeno que descreve o integrante...">{{ $partner->resume }}</textarea><br>
                    <label>Foto do integrante: </label><br>
                    <input type="file" name="image" id="image">
                    <br>
                    <label>Função do integrante: </label>
                    <br>
                    <input type="radio" id="html" name="job" value="professor">
                    <label for="html">Docente</label><br>
                    <input type="radio" id="html" name="job" value="student">
                    <label for="html">Aluno</label><br>
                    <input type="radio" id="html" name="job" value="other">
                    <label for="html">Outro</label><br>
                    <button type="submit">Enviar</button>

                </form>
            </div>
        </div>
    </div>

@endsection
