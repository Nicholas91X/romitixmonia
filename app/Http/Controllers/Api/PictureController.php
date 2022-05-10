<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Picture;

class PictureController extends Controller
{
    public function index()
    {
        $pictures = Picture::all()->where("sezione", "Foto");
        return response()->json($pictures);
    }

    public function index2()
    {
        $pictures = Picture::all()->where("sezione", "Autori")->sortByDesc("nome");
        return response()->json($pictures);
    }

    public function index3()
    {
        $pictures = Picture::all()->where("sezione", "Home");
        return response()->json($pictures);
    }
}