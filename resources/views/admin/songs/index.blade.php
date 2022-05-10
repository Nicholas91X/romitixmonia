@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center">Lista Brani</h4>
            <a href="{{route("songs.create")}}">
                <button type="button" class="my-3 btn btn-success">Aggiungi un Brano</button>
            </a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Path</th>
                    <th scope="col">Azioni</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($songs as $song)
                        <tr>
                            <th scope="row">{{$song->id}}</th>
                            <td>{{$song->titolo}}</td>
                            {{-- <td>{{$song->path}}</td> --}}
                            <td><a href="{{route("songs.show", $song->id)}}">
                            <button type="button" class="btn btn-primary">Visualizza</button>
                            </a></td>
                            <td><a href="{{route("songs.edit", $song->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                            </a></td>
                            <td>
                                <form action="{{route("songs.destroy", $song->id)}}" method="POST">
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