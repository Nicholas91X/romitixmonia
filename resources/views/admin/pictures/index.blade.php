@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center">Lista Foto</h4>
            <a href="{{route("pictures.create")}}">
                <button type="button" class="my-3 btn btn-success">Aggiungi una Foto</button>
            </a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Url</th>
                    <th scope="col">Sezione</th>
                    <th scope="col">Azioni</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pictures as $picture)
                        <tr>
                            <th scope="row">{{$picture->id}}</th>
                            <td>{{$picture->nome}}</td>
                            <td><a href="{{$picture->path}}">{{$picture->path}}</a></td>
                            <td>{{$picture->sezione}}</td>
                            <td><a href="{{route("pictures.show", $picture->id)}}">
                            <button type="button" class="btn btn-primary">Visualizza</button>
                            </a></td>
                            <td><a href="{{route("pictures.edit", $picture->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                            </a></td>
                            <td>
                                <form action="{{route("pictures.destroy", $picture->id)}}" method="POST">
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