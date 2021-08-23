@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <p style="font-size: 30px; font-weight: bold; color: white">Skin List</p>
            <div class="col-md-12">

                @if($champions->count() != 0)
                    @foreach( $champions as $key=>$champion)
                        <div class="row">
                            <a style="color: white" href="champion/{{$champion->id}}"><b>{{$champion->name}}</b></a>
                        </div>
                        <div class="row mb-5" style="text-align:center">
                            @if($champion->championSkins->count() != 0)
                                @foreach($champion->championSkins as $skin)
                                    <div class="col-md-2 p-2">
                                        <img class="img-fluid" width="150"
                                             src="uploads/{{$skin->image}}">
                                        <p class="m-2 text-white">{{$skin->name}}</p>
                                    </div>
                                @endforeach
                                @else
                                <p class="mt-2" style="color: white">Este champion ainda não possui nenhuma skin.</p>
                            @endif
                        </div>
                    @endforeach
                    @else
                    <p class="mt-2" style="color: white">Não existem champions.</p>
                @endif
            </div>
        </div>
    </div>
@endsection