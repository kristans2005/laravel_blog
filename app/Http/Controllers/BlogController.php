<?php


namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view("blog.index", ["blogs" => $blogs]);
    }

    public function destroy($id){
        $Blog = Blog::find($id);
        $Blog->delete();
        return redirect("/blog");
    }

    public function create(){
        return view("blog.create");
    }

    public function store(Request $request, Blog $blog){
        $request->validate(
            [
                "name" => ["required", "min:5", "max:255"],
                "place" => ["required", "min:5", "max:255"],
                "date" => ["required"]
            ]
            );

            $blog->name = $request->name;
            $blog->place = $request->place;
            $blog->date = $request->date;

            $blog->save();

            return redirect("/blog");
    }

    public function edit($id){
        $blog = Blog::find($id);
        
        if($blog){
            return view("blog.edit", ["blogs" => $blog]);
        }
        return redirect("/blog");
    }

    public function update(Request $request, $id){
        $blog = Blog::find($id);

        $request->validate(
            [
                "name" => ["required", "min:5", "max:255"],
                "place" => ["required", "min:5", "max:255"],
                "date" => ["required"]
            ]
            );

            $blog->name = $request->name;
            $blog->place = $request->place;
            $blog->date = $request->date;
            
        $blog->save();
        return redirect("/blog");
    }

}

