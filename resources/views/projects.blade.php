@extends('layouts.idlab')

@section('content')

<x-subheader title="Projetos"></x-subheader>

<x-projects :projects="$projects" />

@endsection
