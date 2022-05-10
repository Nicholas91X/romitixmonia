@extends('layouts.app')

@section('content')
    <a href="{{route("pictures.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna alle Foto</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center">
                <div class="card" style="width: 16rem;">
                    <img src="{{asset("storage/{$picture->path}")}}" alt="">
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$picture->nome}}</strong></h5>
                    </div>
                    <div class="list-group-item">Sezione: {{$picture->sezione}}
                    </div>
                    @if ($picture->testo)
                        <div class="list-group-item">Testo: {{$picture->testo}}
                        </div>
                    @endif
                    <div class="card-body d-flex justify-content-between">
                        <a href="{{route("pictures.edit", $picture->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                        </a>
                        <form action="{{route("pictures.destroy", $picture->id)}}" method="POST">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div>        
@endsection