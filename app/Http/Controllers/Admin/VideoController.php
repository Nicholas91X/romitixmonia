<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\Category;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        $categories = Category::all();

        return view("admin.videos.index", compact("videos", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.videos.create", compact("categories"));
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
            "titolo" => "required|string|max:150",
            "commenti" => "nullable|string|max:50",
            "luogo" => "nullable|string|max:50",
            "anno" => "required|string|max:7|min:4",
            "descrizione" => "nullable",
            "url" => "required|string|max:255|unique:videos,url",
            "category_id" => "nullable|exists:categories,id",
            "sezione" => "nullable"
        ]);

        $data = $request->all();

        $newVideo = new Video();
        $newVideo->titolo = $data["titolo"];
        $newVideo->commenti = $data["commenti"];
        $newVideo->url = $data["url"];
        $newVideo->descrizione = $data["descrizione"];
        $newVideo->luogo = $data["luogo"];
        $newVideo->anno = $data["anno"];
        $newVideo->category_id = $data["category_id"];
        $newVideo->sezione = $data["sezione"];

        $slug = Str::of($newVideo->titolo)->slug("-");
        $count = 1;

        while (Video::where("slug", $slug)->first()) {
            $slug = Str::of($newVideo->titolo)->slug("-") . "-{$count}";
            $count++;
        }

        $newVideo->slug = $slug;

        $newVideo->save();

        return redirect()->route("videos.show", $newVideo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
       
        return view("admin.videos.show", compact("video"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $categories = Category::all();
        return view("admin.videos.edit", compact("video", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            "titolo" => "required|string|max:150",
            "commenti" => "nullable|string|max:50",
            "luogo" => "nullable|string|max:50",
            "anno" => "required|string|max:7|min:4",
            "descrizione" => "nullable",
            "url" => "required|string|max:255",
            "category_id" => "nullable|exists:categories,id",
            "sezione" => "nullable"
        ]);

        $data = $request->all();

        if($video->titolo != $data["titolo"]) {
            $video->titolo = $data["titolo"];

            $slug = Str::of($video->titolo)->slug("-");

            if($slug != $video->slug) {
                $count = 1;

                while (Video::where("slug", $slug)->first()) {
                    $slug = Str::of($video->titolo)->slug("-") . "-{$count}";
                    $count++;
                }

                $video->slug = $slug;
            }
        }

        if($video->url != $data["url"]) {
            $video->url = $data["url"];
        }
        
        $video->commenti = $data["commenti"];
        $video->descrizione = $data["descrizione"];
        $video->luogo = $data["luogo"];
        $video->anno = $data["anno"];
        $video->category_id = $data["category_id"];
        $video->sezione = $data["sezione"];

        $video->save();

        return redirect()->route("videos.show", $video->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route("videos.index"); 
    }
}
