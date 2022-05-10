@extends('layouts.app')

@section('content')
    <a href="{{route("categories.index")}}">
        <button type="button" class="mx-4 btn btn-primary">Torna alle Categorie</button>
    </a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card" style="width: 30rem; padding: 1rem; margin: 1rem;">
                    <div class="card-body">
                      <h4 class="card-title text-center"><strong>Crea un nuova Categoria</strong></h4>
                    </div>
                    <form action="{{route("categories.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="mt-1" for="nome">Nome Categoria(Genere)</label>
                            <input type="text" class="form-control @error("nome") is-invalid @enderror" id="nome" name="nome" placeholder="Nome della Categoria (Genere)" value="{{old("nome")}}">
                            @error("nome")
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Crea</button>
                    </form>
                </div>
            </div>
        </div>        
    </div>        
@endsection