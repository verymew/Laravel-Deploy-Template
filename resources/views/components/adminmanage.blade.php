

<div style="text-align:center; margin: 10px 10px;">
    <span><strong>Novo(a) {{ $title }}: </strong></span><br><br>
    <button onclick="window.location.href='{{ route({{$route}}) }}'" type="button" class="btn btn-success">Criar {{$title}}</button><br><br>
    <span>{{ $slot }} </span><br><br>
</div>


<ul class="list-group">
    @foreach ($items as $items)
            <li class="list-group-item">
                <p>{{ $items->title }}</p>
                <button style="margin: 10px 10px;" onclick="window.location.href='{{ route('project.editPosts', $items->id) }}'" type="button" class="btn btn-warning">Editar</button>
                <x-delete-button message="Tem certeza que deseja excluir o conteúdo?" :postid="$items->id" />
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
