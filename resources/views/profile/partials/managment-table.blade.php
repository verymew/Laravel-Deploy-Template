

<div class="principal">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Gerenciar blog:') }}
    </h2>
    <br>
    <a href="{{ route('project.editPosts') }}" class="button" >Gerenciar Projetos</a><br>
    <a href="" class="button">Gerenciar Atividades</a>
    <a href="" class="button" >Gerenciar Equipe</a>
</div>



<style>
.principal
{
    display: grid;
}
.button {
  background-color: white;
  color: black;
  border-radius: 10em;
  font-size: 17px;
  font-weight: 600;
  padding: 1em 2em;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  border: 1px solid black;
  box-shadow: 0 0 0 0 black;
  margin: 20px 20px;
}

.button:hover {
  transform: translateY(-4px) translateX(-2px);
  box-shadow: 2px 5px 0 0 black;
};

.button:active {
  transform: translateY(2px) translateX(1px);
  box-shadow: 0 0 0 0 black;
};
</style>
