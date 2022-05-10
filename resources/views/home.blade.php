@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Benvenuto/a {{ Auth::user()->name }}! 🙂</h4> 

                </div>
                <div class="card-body">
                    <a href="{{route("videos.index")}}">
                        <button type="button" class="mt-2 btn btn-primary btn-lg btn-block">Vai alla sezione Video</button>
                    </a>
                    <a href="{{route("pictures.index")}}">
                        <button type="button" class="mt-2 btn btn-secondary btn-lg btn-block">Vai alla sezione Foto</button>
                    </a>
                    <a href="{{route("videos.index")}}">
                        <button type="button" class="mt-2 btn btn-success btn-lg btn-block">Vai alla sezione Collaboratori</button>
                    </a>
                    <a href="{{route("categories.index")}}">
                        <button type="button" class="mt-2 btn btn-warning btn-lg btn-block">Vai alla sezione Tags/Categorie</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
