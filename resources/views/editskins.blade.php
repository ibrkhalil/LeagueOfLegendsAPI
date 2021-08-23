@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Skin <b>{{$skin->name}}</b></div>

                    <div class="card-body" style="background-color:#D9D6CF">
                        <form method="POST"
                              action="{{ route('web.championSkin.update', $skin->id) }}"
                              enctype="multipart/form-data">
                        @csrf

                        <!-- <input type="hidden" name="_method" value="put"> -->
                            @method('put')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $skin->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem</label>

                                <div class="col-md-6">
                                    <img width="100" src={{"../..//uploads/$skin->image"}}>
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
