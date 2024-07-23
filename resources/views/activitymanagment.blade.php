@extends('layouts.idlab')

@section('content')

<x-subheader title="Gerenciar Atividades"></x-subheader>


<style>
    .listofposts
    {
        margin-top: 50px;
        margin-bottom: 50px;
        display: flex;
        justify-content: center;
    }
    .listofposts #listinside
    {
        width: 600px;
    }
    .botoeslistofpost
    {
        display: inline;
    }
    @media(max-width: 670px)
    {
        .listofposts #listinside
        {
            width: 100%;
        }
    }
</style>

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

    @foreach ($activities as $activities)
    <div class="listofposts">
        <ol id="listinside" class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
            <div  style="10px 10px" class="ms-2 me-auto">
                <div class="fw-bold">{{ $activities->resume }}</div>
                <p>{{ $activities->id }}</p>
            </div>
            <div class="botoeslistofpost">

                <button onclick="deleteActivity({{ $activities->id }})" style="padding: 10px 10px" type="button" class="btn btn-danger">Excluir</button>
            </div>
            </li>
        </ol>
    </div>
    @endforeach



<script>
    function deleteActivity(postId) {
        if (confirm('Tem certeza que deseja excluir este post?')) {
            $.ajax({
                url: '/activity/deleteactivity/' + postId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Atividade excluída com sucesso!');
                    location.reload();
                },
                error: function(xhr) {
                    alert('Erro ao excluir a atividade. Por favor, tente novamente.');
                }
            });
        }
    }
</script>


@endsection
