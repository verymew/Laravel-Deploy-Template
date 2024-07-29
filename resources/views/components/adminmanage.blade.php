

@props(['editroute','title', 'route', 'secondtitle', 'items', 'deleteroute'])

<div style="text-align:center; margin: 10px 10px;">
    <span><strong>Novo(a) {{ $title }}: </strong></span><br><br>
    <button onclick="window.location.href='{{ route($route) }}'" type="button" class="btn btn-success">Criar {{ $title }}</button><br><br>
    <span>{{ $secondtitle }} </span><br><br>
</div>

<ul class="list-group">
    @foreach ($items as $item)
        <li class="list-group-item">
            <p>{{ $item->title }}</p>
            <button style="margin: 10px 10px;" onclick="window.location.href='{{ route($editroute, $item->id) }}'" type="button" class="btn btn-warning">Editar</button>
            <form action="{{ route($deleteroute, $item->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir o conteúdo?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<style>

.list-group .buttonlist
{
    margin: 10px 10px;
}

.list-group p
{
    width: 90%;
    margin: 10px 10px;
    overflow-wrap: break-word;
}

.list-group
{
    max-height: 200px;
    overflow-y: auto;
}

.list-group-item
{
    display: flex;
    align-items: center;
}

@media(max-width: 680px)
{
    .list-group p
{
    width: 100px;
    margin: 10px 10px;
    overflow-wrap: break-word;
}
}
</style>
