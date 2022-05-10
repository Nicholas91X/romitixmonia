@extends('layouts.app')

@section('content')
    <a href="{{route("videos.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna ai Video</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 d-flex justify-content-center">
                <div class="card" style="width: 16rem;">
                    <iframe max-width="560" max-height="315" src="https://www.youtube.com/embed/{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                      <h5 class="card-title text-center"><strong>{{$video->titolo}}</strong></h5>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                      <li class="list-group-item">Anno: {{$video->anno}}</li>
                      @if ($video->commenti)
                        <li class="list-group-item">Episodio: {{$video->commenti}}</li>
                      @endif
                      @if ($video->descrizione)
                        <li class="list-group-item">Descrizione: {{$video->descrizione}}</li>
                      @endif
                      @if ($video->luogo)
                        <li class="list-group-item">Luogo: {{$video->luogo}}</li>
                      @endif
                      @if ($video->category)
                        <li class="list-group-item">Genere: {{$video->category->nome}}</li>
                      @endif
                      <li class="list-group-item">URL: {{$video->url}}</li>
                    </ul>
                    <div class="card-body d-flex justify-content-between">
                        <a href="{{route("videos.edit", $video->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                        </a>
                        <form action="{{route("videos.destroy", $video->id)}}" method="POST">
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