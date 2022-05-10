@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="text-center">Lista Video</h4>
            <a href="{{route("videos.create")}}">
                <button type="button" class="my-3 btn btn-success">Aggiungi un Video</button>
            </a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Url</th>
                    <th scope="col">Commenti</th>
                    <th scope="col">Azioni</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <th scope="row">{{$video->id}}</th>
                            <td>{{$video->titolo}}</td>
                            <td><a href="https://www.youtube.com/embed/{{$video->url}}">{{$video->titolo}}</a></td>
                            <td>{{$video->commenti}}</td>
                            <td><a href="{{route("videos.show", $video->id)}}">
                            <button type="button" class="btn btn-primary">Visualizza</button>
                            </a></td>
                            <td><a href="{{route("videos.edit", $video->id)}}">
                            <button type="button" class="btn btn-warning">Modifica</button>
                            </a></td>
                            <td>
                                <form action="{{route("videos.destroy", $video->id)}}" method="POST">
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