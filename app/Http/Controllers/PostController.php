<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Like;
use App\Comment;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{


    public function like_post($post_id, $user_id){
        $like = new Like;
        $like->user_id = $user_id;
        $like->post_id = $post_id;
        $like->save();

        return response()->json([
            "message" => "Success"
        ], 200);
    }

    public function unlike_post($post_id, $user_id){
        $like = Like::where([['user_id', $user_id],['post_id', $post_id]]);
        if(!$like){
            return response()->json([
                'message' => 'Fail'
            ], 400);
        }
        $like->delete();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function comment(Request $request){
        $request->validate([
            'user_id' => 'required|numeric',
            'post_id' => 'required|numeric',
            'comment' => 'required|string'
        ]);
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->user_id = $request->input('user_id');
        $comment->post_id = $request->input('post_id');
        $comment->save();
        
        return response()->json([
            'message' => "Success"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'post' => 'required|string'
        ]);
        $post = new Post;
        $post->post = $request->input('post');
        $post->user_id = $request->input('user_id');
        $post->save();
        
        return response()->json([
            'message' => "Success"
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
