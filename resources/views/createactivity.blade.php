@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="form-div" style="width: 100%; display: flex; justify-content: center;">
                <form method="POST" action="{{ route('activity.create') }}" enctype="multipart/form-data"
                    style="margin: 20px 20px;">
                    @csrf
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Voltar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nova Atividade</li>
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

                    <label for="fname">Nome da atividade:</label><br>
                    <input type="text" name="projname"><br>
                    <label for="fname">Sobre a atividade:</label><br>
                    <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um resumo sobre o evento..."></textarea><br>
                    <br>
                    <label for="start">Dia da Atividade:</label>
                    <input type="date" id="start" name="event_day" /><br><br>
                    <label>Imagem da Atividade: </label><br>
                    <input type="file" name="image" id="image">
                    <br>
                    <button style="margin-top: 20px" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
