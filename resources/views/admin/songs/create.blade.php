@extends('layouts.app')

@section('content')
    <a href="{{route("songs.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna ai Brani</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card" style="width: 30rem; padding: 1rem; margin: 1rem;">
                    <div class="card-body">
                      <h4 class="card-title text-center"><strong>Aggiungi un nuovo Brano</strong></h4>
                    </div>
                        <form action="{{route("songs.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label class="mt-1" for="titolo">Titolo</label>
                              <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" name="titolo" placeholder="Titolo del Video" value="{{old("titolo")}}">
                              @error("titolo")
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error("path") is-invalid @enderror" id="song" name="path">
                                <label class="custom-file-label" for="song">Scegli brano</label>
                                @error("path")
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mb-1">Crea</button>
                        </form>
                    <div class="card-body text-center">
                        
                    </div>
                </div>
            </div>
        </div>        
    </div>        
@endsection