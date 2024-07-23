
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

    @foreach ($projects as $projects)
    <div class="listofposts">
        <ol id="listinside" class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
            <div  style="10px 10px" class="ms-2 me-auto">
                <div class="fw-bold">{{ $projects->title }}</div>
                {{ $projects->resume }}
            </div>
            <div class="botoeslistofpost">
                <a href="{{ route('project.seePost', ['postid' => $projects->id]) }}" class="btn btn-warning" style="padding: 10px 10px;">Editar</a>
                <x-delete-button postid='{{ $projects->id }}' />
            </div>
            </li>
        </ol>
    </div>
    @endforeach

