@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Skill <b>{{$skill->name}}</b></div>

                    <div class="card-body" style="background-color:#D9D6CF">
                        <form method="POST"
                              action="{{ route('web.championSkill.update', $skill->id) }}"
                              enctype="multipart/form-data">
                        @csrf

                        <!-- <input type="hidden" name="_method" value="put"> -->
                            @method('put')

                            <div class="form-group row">
                                <label for="small_name" class="col-md-4 col-form-label text-md-right">Abreviatura</label>

                                <div class="col-md-6">
                                    <input id="small_name" type="text"
                                           class="form-control @error('small_name') is-invalid @enderror" name="small_name"
                                           value="{{ $skill->small_name }}" required autocomplete="small_name" autofocus>

                                    @error('small_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $skill->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descrição</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror" name="description"
                                           value="{{ $skill->description }}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem</label>

                                <div class="col-md-6">
                                    <img src={{"../..//uploads/$skill->image"}}>
                                    <input id="image" type="file" style="background-color:#D9D6CF"
                                           class="form-control @error('image') is-invalid @enderror mt-2" name="image"
                                    >

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" value="{{$skill->id}}" name="skill_id">
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
