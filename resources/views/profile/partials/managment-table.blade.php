

<div class="principal">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Gerenciar blog') }}
    </h2>
    <br>
    <h1 style="text-decoration: solid">Projetos:</h1><br>
    <a href="{{ route('project.addproject') }}" class="button" >Novo Projeto</a><br>
    <a href="{{ route('project.editPosts') }}" class="button" >Gerenciar Projetos</a><br>
    <h1 style="text-decoration: solid">Atividades:</h1><br>
    <a href="{{ route('activity.registeractivity') }}" class="button">Nova Atividade</a><br>
    <a href="{{ route('activity.managment') }}" class="button">Gerenciar Atividades</a><br>
    <h1 style="text-decoration: solid">Equipe:</h1><br>
    <a href="{{ route('team.pagepartner') }}" class="button">Adicionar integrante</a><br>
    <a href="" class="button" >Gerenciar Equipe</a><br>
</div>



<style>
.principal
{
    display: grid;
}
.button{
 appearance: none;
 background-color: transparent;
 border: 0.125em solid #1A1A1A;
 border-radius: 0.9375em;
 box-sizing: border-box;
 color: #3B3B3B;
 cursor: pointer;
 display: inline-block;
 font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
 font-size: 16px;
 font-weight: 600;
 line-height: normal;
 margin: 0;
 min-height: 3.75em;
 min-width: 0;
 outline: none;
 padding: 1em 2.3em;
 text-align: center;
 text-decoration: none;
 transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 will-change: transform;
}

.button:disabled {
 pointer-events: none;
}

.button:hover {
 color: #fff;
 background-color: #1A1A1A;
 box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
 transform: translateY(-2px);
}

.button:active {
 box-shadow: none;
 transform: translateY(0);
}
</style>
