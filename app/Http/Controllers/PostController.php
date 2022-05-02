<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = PostModel::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new PostModel;
        $post-> image = $request->image;
        $post-> name = $request->name;
        $post-> description = $request->description;
        $result = $post-> save();
        if ($result){
            return ["result"=>"Post Added"];
        }
        else
        {
            return ["result"=>"Post Not Added"];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = PostModel::find($id);
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = PostModel::find($id);
        $post-> image = $request->image;
        $post-> name = $request->name;
        $post-> description = $request->description;
        $result = $post-> save();
        if ($result){
            return ["result"=>"Post Updated"];
        }
        else
        {
            return ["result"=>"Post Not Updated"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostModel::find($id);
        $result = $post->delete();
        if ($result){
            return ["result"=>"Post is deleted"];
        }
        else
        {
            return ["result"=>"Post is not delted"];
        }
    }
}
