<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all()->where("sezione", "RMxtr");
        return response()->json($videos);
    }

    public function index2()
    {
        $videos = Video::all()->where("sezione", "Lunigiana Calling");
        return response()->json($videos);
    }

    public function index3()
    {
        $videos = Video::all()->where("sezione", "Cover Monia");
        return response()->json($videos);
    }
}
