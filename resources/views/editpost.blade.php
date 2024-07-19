@extends('layouts.idlab')

@section('content')

<x-subheader title="Gerenciar projetos"></x-subheader>

<x-projectmanage :projects="$projects"></x-projectmanage>

@endsection
