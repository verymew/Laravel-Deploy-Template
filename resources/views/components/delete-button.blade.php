    @props(['postid', 'deleteroute', 'message'])

    <form action="{{ route($deleteroute, $postid) }}" method="POST" onsubmit="return confirm('{{ $message }}');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
