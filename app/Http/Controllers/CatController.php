<?php

namespace App\Http\Controllers;


use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{
    public function index()
    {
//        SELECT * FROM cats
        $cats = Cat::paginate(2);
//        $cats = Cat::all();
        return view('cats.index',[
            'cats'=>$cats

        ]);

    }

    public function show($id)
    {
        //SELECT * FROM cats WHERE id = $id;
        $cat =  Cat::findorFail($id);
        return view('cats.show',[
            'cat'=>$cat
        ]);
    }

    public function create()
    {
        return view('cats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'desc' => 'required|string'
        ]);


        Cat::create([
            'name'=> $request->name,
            'desc' => $request->desc
        ]);
        return redirect(url('cats'));
    }

    public function edit($id)
    {
        $cat =  Cat::findorFail($id);
        return view('cats.edit',[
            'cat'=>$cat
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'desc' => 'required|string',
            'img'=>'required|image|max:1024|mimes:jpg,jpeg,png'
        ]);

        Cat::findorFail($id)->update([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect(url('cats'));

    }

    public function delete($id)
    {
        Cat::findorFail($id)->delete();
        return redirect(url('/cats'));
    }

    public function latest($num)
    {
        $cat = Cat::orderBy('id','DESC')->take($num)->get();
        return view('cats.latest',[
            'cats' => $cat ,
            'num'=>$num
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $cats = Cat::where('name','like',"%$keyword%")->get();
        return view('cats.search',[
            'keyword'=>$keyword,
            'cats'=>$cats,
        ]);

    }
}
