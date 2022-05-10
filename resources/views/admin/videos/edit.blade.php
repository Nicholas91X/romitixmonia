@extends('layouts.app')

@section('content')
    <a href="{{route("videos.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna ai Video</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card" style="width: 30rem; padding: 1rem; margin: 1rem;">
                    <div class="card-body">
                      <h4 class="card-title text-center"><strong>Modifica Video</strong></h4>
                    </div>
                        <form action="{{route("videos.update", $video->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label class="mt-1" for="titolo">Titolo</label>
                              <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" name="titolo" placeholder="Modifica titolo del Video" value="{{old("titolo") ? old("titolo") : $video->titolo}}">
                              @error("titolo")
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="anno">Anno</label>
                                <input type="number" class="form-control @error("anno") is-invalid @enderror" id="anno" name="anno" placeholder="Modifica anno di pubblicazione" value="{{old("anno") ? old("anno") : $video->anno}}">
                                @error("anno")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="url">URL</label>
                                <input type="text" class="form-control @error("url") is-invalid @enderror" id="url" name="url" placeholder="Modifica URL del Video" value="{{old("url") ? old("url") : $video->url}}">
                                @error("url")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="commenti">Commenti (opzionale)</label>
                                <input type="text" class="form-control @error("commenti") is-invalid @enderror" id="commenti" name="commenti" placeholder="(Es. Modifica Stagione, Episodio..)" value="{{old("commenti") ? old("commenti") : $video->commenti}}">
                                @error("commenti")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="luogo">Luogo (opzionale)</label>
                                <input type="text" class="form-control @error("luogo") is-invalid @enderror" id="luogo" name="luogo" placeholder="Modifica luogo di registrazione" value="{{old("luogo") ? old("luogo") : $video->luogo}}">
                                @error("luogo")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="category_id">Genere</label>
                                <select class="custom-select @error("category_id") is-invalid @enderror" name="category_id" id="category_id">
                                    <option value="">Seleziona un genere</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{old("category_id", $video->category_id) == $category->id ? "selected" : ""}}>{{$category->nome}}</option>
                                    @endforeach
                                </select>
                                @error("category_id")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="sezione">Sezione</label>
                                <select class="custom-select @error("sezione") is-invalid @enderror" name="sezione" id="sezione">
                                    <option value="RMxtr" {{old("sezione", $video->sezione) == "RMxtr" ? "selected" : ""}}>RMxtr</option>
                                    <option value="Lunigiana Calling" {{old("sezione", $video->sezione) == "Lunigiana Calling" ? "selected" : ""}}>Lunigiana Calling</option>
                                    <option value="Cover Monia" {{old("sezione", $video->sezione) == "Cover Monia" ? "selected" : ""}}>Cover Monia</option>
                                </select>
                                @error("sezione")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="descrizione">Descrizione (opzionale)</label>
                                <textarea rows="5" cols="40" class="form-control @error("descrizione") is-invalid @enderror" id="descrizione" name="descrizione" placeholder="Modifica descrizione del Video">{{old("descrizione") ? old("descrizione") : $video->descrizione}}</textarea>
                                @error("descrizione")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning mb-1">Modifica</button>
                        </form>
                    <div class="card-body text-center">
                        
                    </div>
                </div>
            </div>
        </div>        
    </div>        
@endsection