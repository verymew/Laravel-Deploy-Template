@extends('layouts.idlab')

@section('content')

<x-subheader title="Registrar integrante"></x-subheader>

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
<form method="POST" action="{{ route('team.createpartner') }}"  enctype="multipart/form-data" style="margin: 20px 20px;">
  @csrf
  @method('POST')
  <label for="fname">Nome do integrante:</label><br>
  <input type="text" name="projname" ><br>
  <br>
  <label for="lname">Sobre:</label><br>
  <textarea style="height: 100px; width: 300px;" name="projresume" placeholder="Um texto pequeno que descreve o integrante..."></textarea><br>
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

@endsection
