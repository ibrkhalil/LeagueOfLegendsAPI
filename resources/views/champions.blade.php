@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::check())
            @if(Auth::user()->role->name == "admin")
                <div class="row justify-content-center">
                    <button style="background-color: #E8A300" class="btn mr-2 mt-2 btn-sm text-white"
                            onclick="location.href='{{route('web.champion.create')}}'">Adicionar novo champion
                    </button>
                    <button style="background-color: #E8A300" class="btn mr-2 mt-2 btn-sm text-white"
                            onclick="location.href='{{route('web.championSkin.create')}}'">Adicionar nova skin
                    </button>
                    <button style="background-color: #E8A300" class="btn mr-2 mt-2 btn-sm text-white"
                            onclick="location.href='{{route('web.championSkill.create')}}'">Adicionar nova habilidade
                    </button>
                    <button style="background-color: #E8A300" class="btn mr-2 mt-2 btn-sm text-white"
                            onclick="location.href='{{route('web.championRole.create')}}'">Adicionar novo role
                    </button>
                </div>
            @endif
        @endif

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                @include('bo.partials.alerts')
                @if($champions->count() != 0)
                    @foreach($champions as $key=>$champion)

                        <div class="card mb-3">
                            <div class="card-header p-1 row ml-0 mr-0">
                                <div class="col-6">
                                    <b>{{$champion -> name}}</b>
                                    <p style="font-size: 10px">{{$champion->championRole->name}}</p>
                                </div>
                                <div class="col-6 m-auto">
                                    @if(Auth::check())
                                        @if(Auth::user()->role->name == "admin")
                                            <button type="button" style="background-color: #E8A300"
                                                    class="btn btn-sm float-right text-white"
                                                    onclick="location.href='{{url('champion/'.$champion->id.'/edit')}}'">
                                                Editar
                                            </button>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="card-body" style="background-color:#D9D6CF">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="img-fluid" src="uploads/{{$champion->image}}">
                                    </div>
                                    <div class="col-9" style="color: #21201C">
                                        <p>{{$champion -> title}}</p>
                                        <p>{{$champion ->description}}</p>

                                    </div>
                                    <div class="m-auto" style="text-align: center">
                                        <button type="button" style="background-color: #E8A300"
                                                class="btn btn-sm text-white"
                                                data-toggle="collapse"
                                                data-target="#skills{{$key}}">Skills
                                        </button>
                                        <button type="button" style="background-color: #E8A300"
                                                class="btn btn-sm text-white"
                                                data-toggle="collapse"
                                                data-target="#skins{{$key}}">Skins
                                        </button>

                                    </div>
                                </div>
                                <div class="collapse mt-5" style="color: white" id="skills{{$key}}">
                                    <p style="text-align: center; background-color:rgba(255,255,255,0.1); color: #21201C">
                                        <b>Abilities</b></p>
                                    @if($champion->championSkills->count() > 0)
                                        @foreach($champion->championSkills as $skill)
                                            <div class="row mb-2">
                                                <div class="col-md-3" style="text-align:center; color: #21201C">
                                                    <img class="m-auto" src="uploads/{{$skill->image}}">
                                                    <p class="mt-1">{{$skill->name}}</p>
                                                </div>
                                                <div class="col-md-6" style="color: #21201C">
                                                    <p>{{$skill->description}}</p>
                                                </div>
                                                @if(Auth::check())
                                                    @if(Auth::user()->role->name == "admin")
                                                        <div class="col-md-3 m-auto" style="text-align:center">
                                                            <button style="width: 30%; background-color: #E8A300"
                                                                    type="button"
                                                                    class="btn btn-sm"
                                                                    onclick="location.href='{{url('championSkill/'.$skill->id.'/edit')}}'">
                                                                <i class="fa fa-pencil-square-o text-white"></i>
                                                            </button>
                                                            <button style="width: 30%;background-color: #E8A300"
                                                                    type="button"
                                                                    class="btn btn-sm"
                                                                    data-catid="{{$skill->id}}" data-toggle="modal"
                                                                    data-target="#skillDeleteModal{{$skill->id}}">
                                                                <i class="fa fa-trash text-white"></i>
                                                            </button>

                                                            <div class="modal fade" id="skillDeleteModal{{$skill->id}}"
                                                                 tabindex="-1"
                                                                 role="dialog"
                                                                 aria-labelledby="skillDeleteModal{{$skill->id}}"
                                                                 aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                    <span style="color:black" id="skillDeleteModalLabel{{$skill->id}}">
                                                    Apagar <b>{{$skill->name}}</b>?</span>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                    <span style="color: red">Deseja mesmo apagar <b>{{$skill->name}}
                                                                            ?</b></span>
                                                                            <br/>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <form class="delete mt-1"
                                                                                  action="{{route('web.championSkill.destroy', $skill->id)}}"
                                                                                  method="POST">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary btn-sm"
                                                                                        data-dismiss="modal">
                                                                                    <i class="fa fa-remove"></i>
                                                                                </button>
                                                                                <input type="hidden" name="_method"
                                                                                       value="DELETE">
                                                                                {{ csrf_field() }}
                                                                                <button type="submit"
                                                                                        style="background-color: #E8A300"
                                                                                        class="btn btn-sm">
                                                                                    <i class="fa fa-check"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Não tem abilities</p>
                                    @endif
                                </div>
                                <div class="collapse mt-5" style="color: white" id="skins{{$key}}">
                                    <p style="text-align: center; background-color:rgba(255,255,255,0.1); color: #21201C">
                                        <b>Skins</b></p>
                                    @foreach($champion->championSkins as $skin)
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <img class="img-fluid" height="50" width="50"
                                                     src="uploads/{{$skin->image}}">
                                            </div>
                                            <div class="col-md-4 m-auto" style="color: #21201C">
                                                <p>{{$skin->name}}</p>
                                            </div>
                                            @if(Auth::check())
                                                @if(Auth::user()->role->name == "admin")
                                                    <div class="col-md-4 m-auto">
                                                        <button style="width: 20%; background-color: #E8A300"
                                                                type="button"
                                                                class="btn btn-sm text-white"
                                                                onclick="location.href='{{url('championSkin/'.$skin->id.'/edit')}}'">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </button>
                                                        <button style="width: 20%; background-color: #E8A300"
                                                                type="button"
                                                                class="btn btn-sm text-white"
                                                                data-catid="{{$skin->id}}" data-toggle="modal"
                                                                data-target="#skinDeleteModal{{$skin->id}}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>

                                                        <div class="modal fade" id="skinDeleteModal{{$skin->id}}"
                                                             tabindex="-1"
                                                             role="dialog"
                                                             aria-labelledby="skinDeleteModal{{$skin->id}}"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                    <span style="color:black" id="skinDeleteModalLabel{{$skin->id}}">
                                                    Apagar @if($skin->name == 'Default') {{$champion->name}} - @endif
                                                        <b>{{$skin->name}}</b>?</span>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <span style="color: red">Deseja mesmo apagar <b>{{$skin->name}}
                                                                            ?</b></span>
                                                                        <br/>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <form class="delete mt-1"
                                                                              action="{{route('web.championSkin.destroy', $skin->id)}}"
                                                                              method="POST">
                                                                            <button type="button"
                                                                                    class="btn btn-secondary btn-sm"
                                                                                    data-dismiss="modal">
                                                                                <i class="fa fa-remove"></i>
                                                                            </button>
                                                                            <input type="hidden" name="_method"
                                                                                   value="DELETE">
                                                                            {{ csrf_field() }}
                                                                            <button type="submit"
                                                                                    class="btn btn-warning btn-outline-dark btn-sm">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                <div class="text-center" style="margin-left: 18vw !important;">
                    {{$champions->links()}}
                </div>
                @else
                    <p style="color: white">Não existem champions.</p>
                @endif
            </div>
        </div>
    </div>
@endsection