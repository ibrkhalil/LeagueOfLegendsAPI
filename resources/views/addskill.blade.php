@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar nova habilidade</div>

                    <div class="card-body" style="background-color:#D9D6CF">
                        <form method="POST" action="{{ route('web.championSkill.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="small_name" class="col-md-4 col-form-label text-md-right">Nome abreviado</label>

                                <div class="col-md-6">
                                    <input id="small_name" type="text"
                                           class="form-control @error('title') is-invalid @enderror" name="small_name"
                                           value="{{ old('small_name') }}" required autocomplete="small_name" autofocus>

                                    @error('small_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required
                                           autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">Descri????o</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description" value="{{ old('description') }}" required
                                           autocomplete="title">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="champ_id" class="col-md-4 col-form-label text-md-right">Champion Name</label>

                                <div class="col-md-6">

                                    <select name="champ_id">
                                        @foreach($champions as $champion)
                                            <option value="{{$champion->id}}">{{$champion->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('champ_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" style="background-color:#D9D6CF"
                                           class="form-control @error('image') is-invalid @enderror" name="image"
                                           required>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn text-white" style="background-color: #E8A300">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
