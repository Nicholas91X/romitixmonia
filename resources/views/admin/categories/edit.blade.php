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
                      <h4 class="card-title text-center"><strong>Modifica una Categoria</strong></h4>
                    </div>
                    <form action="{{route("categories.update", $category->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label class="mt-1" for="nome">Nome Categoria (Genere)</label>
                            <input type="text" class="form-control @error("nome") is-invalid @enderror" id="nome" name="nome" placeholder="Modifica nome Categoria(Genere)" value="{{old("nome") ? old("nome") : $category->nome}}">
                            @error("nome")
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Modifica</button>
                    </form>
                </div>
            </div>
        </div>        
    </div>        
@endsection