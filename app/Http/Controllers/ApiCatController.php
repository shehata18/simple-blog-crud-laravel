<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatResource;
use App\Models\Cat;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ApiCatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();
        return CatResource::collection($cats);
    }

    public function show($id)
    {
        $cat = Cat::find($id);
        if ($cat == null){
            return response()->json([
                'msg' => '404 not found',
            ],404);
        }
        return new CatResource($cat);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'desc' => 'required|string'
        ]);
        if ($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
            ]);
        }

        $cat = Cat::create([
            'name'=> $request->name,
            'desc' => $request->desc
        ]);
        return response()->json([
            'msg'=>'created successfuly',
            'cat'=>new CatResource($cat)
        ],201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:50',
            'desc' => 'required|string'
        ]);

        if ($validator->fails()){
            return response()->json([
                'error'=>$validator->errors(),
            ],409);
        }


        $cat = Cat::find($id);
        if ($cat == null){
            return response()->json([
                'msg'=>'404 not found',
            ],404);
        }

        $cat = Cat::update([
            'name'=> $request->name,
            'desc' => $request->desc
        ]);
        return response()->json([
            'msg'=>'updated successfuly',
            'cat'=>new CatResource($cat)
        ],201);

    }

    public function delete($id)
    {
        $cat = Cat::find($id);
        if($cat == null){
            return response()->json([
                'msg'=>'404 not found',
            ],404);
        }

        $cat->delete();

        return response()->json([
            'msg'=>'Deleted successfully',
        ],200);



    }
}
