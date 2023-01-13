<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapost = DB::table('posts')->get();
        return view('post.index', compact('datapost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        $query = DB::table('posts')->insert([
            "title" => $request ["title"],
            "body" => $request ["body"],
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
        $showpostbyid = DB::table('posts')->where('id', $post->id)->first();
        return view('post.show', compact('showpostbyid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $showpostbyid = DB::table('posts')->where('id', $post->id)->first();
        // var_dump($showpostById);
        return view('post.edit',compact ('showpostbyid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        // dd($request)
        $query = DB::table('posts')
        ->where('id', $post->id)
        ->update([
            'title' => $request["title"],
            'body'  => $request["body"]
        ]);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
        $query = DB::table('posts')->where('id',$post->id)->delete();
        return redirect('/post');
    }
}
