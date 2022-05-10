@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center">Categorie (Generi)</h4>
            <a href="{{route("categories.create")}}">
                <button type="button" class="my-3 btn btn-success">Aggiungi Categoria</button>
            </a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Video Associati</th>
                    <th scope="col">Azioni</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->nome}}</td>
                            <td>
                                @if (count($category->videos) > 0)
                                    <select name="associati" id="associati">
                                        @foreach ($category->videos as $video)
                                            <option value="">{{$video->titolo}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    Nessun Video associato
                                @endif
                            </td>
                            <td><a href="{{route("categories.edit", $category->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                            </a></td>
                            <td>
                                <form action="{{route("categories.destroy", $category->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection