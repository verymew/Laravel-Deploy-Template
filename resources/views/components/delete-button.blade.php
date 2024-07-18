<button onclick="deletePost({{ $projects->id }})" style="padding: 10px 10px" type="button" class="btn btn-danger">Excluir</button>

<script>
    function deletePost(postId) {
        if (confirm('Tem certeza que deseja excluir este post?')) {
            $.ajax({
                url: '/post/deletepost' + postId,
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
