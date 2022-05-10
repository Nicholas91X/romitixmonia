<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view("admin.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "nome" => "required|string|max:255"
            ]
        );

        $data = $request->all();

        $newCategory = new Category();
        $newCategory->nome = $data["nome"];

        $slug = Str::of($newCategory->nome)->slug("-");
        $count = 1;

        while (Category::where("slug", $slug)->first()) {
            $slug = Str::of($newCategory->nome)->slug("-") . "-{$count}";
            $count++;
        }

        $newCategory->slug = $slug;

        $newCategory->save();

        return redirect()->route("categories.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view("admin.categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                "nome" => "required|string|max:255"
            ]
        );

        $data = $request->all(); 

        if($category->nome != $data["nome"]) {
            $category->nome = $data["nome"];

            $slug = Str::of($category->nome)->slug("-");

            if($slug != $category->slug) {
                $count = 1;

                while (Category::where("slug", $slug)->first()) {
                    $slug = Str::of($category->nome)->slug("-") . "-{$count}";
                    $count++;
                }

                $category->slug = $slug;
            }
        }

        $category->save();

        return redirect()->route("categories.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route("categories.index");
    }
}
