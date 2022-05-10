<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Picture;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all();

        return view("admin.pictures.index", compact("pictures"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pictures.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nome" => "string",
            "path" => "required",
            "sezione" => "nullable",
            "testo" => "nullable",
            "ruolo" => "nullable",
            "social" => "nullable"
        ]);
        
        $data = $request->all();

        $newPicture = new Picture();
        $newPicture->nome = $data["nome"];
        $path_img = Storage::put("uploads", $data["path"]);
        $newPicture->path = $path_img;
        $newPicture->sezione = $data["sezione"];
        $newPicture->testo = $data["testo"];
        $newPicture->ruolo = $data["ruolo"];
        $newPicture->social = $data["social"];
        $newPicture->save();

        return redirect()->route("pictures.show", $newPicture->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        return view("admin.pictures.show", compact("picture"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        return view("admin.pictures.edit", compact("picture"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $request->validate([
            "nome" => "string",
            "path" => "required",
            "sezione" => "nullable",
            "testo" => "nullable",
            "ruolo" => "nullable",
            "social" => "nullable"
        ]);
        
        $data = $request->all();

        $picture->nome = $data["nome"];
        $path_img = Storage::put("uploads", $data["path"]);
        $picture->path = $path_img;
        $picture->sezione = $data["sezione"];
        $picture->testo = $data["testo"];
        $picture->ruolo = $data["ruolo"];
        $picture->social = $data["social"];
        $picture->save();

        return redirect()->route("pictures.index", $picture->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();

        return redirect()->route("pictures.index"); 
    }
}
