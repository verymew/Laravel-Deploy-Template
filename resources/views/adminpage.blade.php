@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                        type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Atividades</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Projetos</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Equipe</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Conta</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                        <x-adminmanage deleteroute="activity.delete" editroute="activity.edit" route="activity.registeractivity" :items='$activities'>
                            <x-slot:title>Atividades</x-slot>
                            <x-slot:secondtitle><strong>Gerenciar Atividades:</strong></x-slot:secondtitle>
                        </x-adminmanage>

                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                        tabindex="0">

                        <x-adminmanage deleteroute="project.delete" editroute="project.editPosts" route="admin.newproject" :items='$projects'>
                            <x-slot:title>Projeto</x-slot>
                            <x-slot:secondtitle><strong>Gerenciar Projetos:</strong></x-slot:secondtitle>
                        </x-adminmanage>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                        tabindex="0">

                        <x-adminmanage deleteroute="team.delete" editroute="team.edit" route="team.pagepartner" :items='$team'>
                            <x-slot:title>Equipe</x-slot>
                            <x-slot:secondtitle><strong>Gerenciar Equipe:</strong></x-slot:secondtitle>
                        </x-adminmanage>


                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                        tabindex="0">

                        <div style="width: 200px; margin: 20px 0px;">
                            <button onclick="window.location.href='/profile'" type="button"class="btn btn-secondary">Configurar Conta</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
