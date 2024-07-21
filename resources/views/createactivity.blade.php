@extends('layouts.idlab')

@section('content')

<x-subheader title="Nova atividade"></x-subheader>

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
    <form method="POST" action="{{ route('activity.create') }}" enctype="multipart/form-data" style="margin: 20px 20px;">
      @csrf
      <label for="fname">Sobre a atividade:</label><br>
      <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um resumo sobre o evento..."></textarea><br>
      <br>
      <label for="start">Dia da Atividade:</label>
      <input type="date" id="start" name="event_day"/><br>
      <label>Imagem da Atividade: </label><br>
      <input type="file" name="image" id="image">
      <br>
      <button style="margin-top: 20px" type="submit">Enviar</button>
    </form>
</div>

@endsection
