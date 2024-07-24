@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="form-div" style="width: 100%; display: flex; justify-content: center;">
                <form method="POST" action="{{ route('activity.put') }}" enctype="multipart/form-data" style="margin: 20px 20px;">
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

                    <label for="fname">Nome da atividade:</label><br>
                    <input type="text" value="{{$activity->title}}" name="projname"><br>
                    <label for="fname">Sobre a atividade:</label><br>
                    <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um resumo sobre o evento...">{{$activity->resume}}</textarea><br>
                    <br>
                    <label for="start">Dia da Atividade:</label>
                    <input value="{{$activity->activity_date}}" type="date" id="start" name="event_day"/><br><br>
                    <label>Imagem da Atividade: </label><br>
                    <input value="" type="file" name="image" id="image">
                    <br>
                    <button style="margin-top: 20px" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
