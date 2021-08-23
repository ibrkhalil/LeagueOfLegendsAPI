@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body" style="background-color: #D9D6CF">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p style="color: #21201C">Bem vindo <b>{{Auth::user()->role->name}}</b>!</p>
                        <p class="mt-5" style="color: #21201C">Acesso rápido:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color: #D9D6CF">
                                <a href="{{ url('/champion') }}" style="color: #00174C">Lista de champions</a>
                            </li>
                            <li class="list-group-item" style="background-color: #D9D6CF">
                                <a href="{{ url('/championSkin') }}" style="color: #00174C">Lista de skins</a>
                            </li>
                        </ul>
                        @if(Auth::user()->role->name == "admin")
                            <p class="mt-5">Área de administração:</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background-color: #D9D6CF">
                                    <a href="{{ url('/admin') }}" style="color: #00174C">Backoffice</a>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
