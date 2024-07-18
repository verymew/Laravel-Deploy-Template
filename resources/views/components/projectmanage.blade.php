
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

@foreach ($projects as $projects)
    <div class="listofposts">
        <ol id="listinside" class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
            <div  style="10px 10px" class="ms-2 me-auto">
                <div class="fw-bold">{{ $projects->title }}</div>
                {{ $projects->resume }}
            </div>
            <div class="botoeslistofpost">
                <button style="padding: 10px 10px" type="button" class="btn btn-warning">Editar</button>
                <button onclick="deletePost({{ $projects->id }})" style="padding: 10px 10px" type="button" class="btn btn-danger">Excluir</button>
            </div>
            </li>
        </ol>
    </div>
@endforeach

<script>
        function deletePost(postId) {
        if (confirm('Tem certeza que deseja excluir este post?')) {
            $.ajax({
                url: '/post/deletepost/' + postId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Post excluído com sucesso!');
                    location.reload();
                },
                error: function(xhr) {
                    alert('Erro ao excluir o post. Por favor, tente novamente.');
                }
            });
        }
    }
</script>
