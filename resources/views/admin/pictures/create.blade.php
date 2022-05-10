@extends('layouts.app')

@section('content')
    <a href="{{route("pictures.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna alle Foto</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card" style="width: 30rem; padding: 1rem; margin: 1rem;">
                    <div class="card-body">
                      <h4 class="card-title text-center"><strong>Aggiungi una nuova Foto</strong></h4>
                    </div>
                        <form action="{{route("pictures.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label class="mt-1" for="nome">Nome</label>
                              <input type="text" class="form-control @error("nome") is-invalid @enderror" id="nome" name="nome" placeholder="Nome della Foto" value="{{old("nome")}}">
                              @error("nome")
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="ruolo">Ruolo</label>
                                <input type="text" class="form-control @error("ruolo") is-invalid @enderror" id="ruolo" name="ruolo" placeholder="Ruolo" value="{{old("ruolo")}}">
                                @error("ruolo")
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="mt-1" for="social">IG:</label>
                                <input type="text" class="form-control @error("social") is-invalid @enderror" id="social" name="social" placeholder="Social" value="{{old("social")}}">
                                @error("social")
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            <div class="form-group">
                                <label class="mt-1" for="path">Scegli foto</label>
                                <input class="@error("path") is-invalid @enderror"" type="file" id="path" name="path" accept="image/*">
                                @error("path")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mt-1" for="sezione">Sezione</label>
                                <select class="custom-select @error("sezione") is-invalid @enderror" name="sezione" id="sezione">
                                    <option value="Foto" {{old("sezione") == "Foto" ? "selected" : ""}}>Foto</option>
                                    <option value="Autori" {{old("sezione") == "Autori" ? "selected" : ""}}>Autori</option>
                                    <option value="Home" {{old("sezione") == "Home" ? "selected" : ""}}>Home</option>
                                </select>
                                @error("sezione")
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label class="mt-1" for="testo">Testo</label>
                              <textarea name="testo" id="testo" cols="30" rows="10" class="form-control @error("testo") is-invalid @enderror">
                                  {{old("testo")}}
                              </textarea>
                              @error("testo")
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