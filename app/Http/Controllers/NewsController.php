<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_news = News::all();
        return response()->json($list_news);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $news = new News;
        $news->link = $request->input('link');
        $news->img = $request->input('img');
        $news->tag = $request->input('tag');
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->author = $request->input('author');
        $news->date = $request->input('date');
        $news->save();
        
        return response()->json([
            'message' => "Success"
        ]);
    }

    public function update(Request $request)
    {
        $news = News::findOrFail($request->input('id'));
        $news->link = $request->input('link');
        $news->img = $request->input('img');
        $news->tag = $request->input('tag');
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->author = $request->input('author');
        $news->date = $request->input('date');
        $news->save();
        
        return response()->json([
            'message' => "Success"
        ]);
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return response()->json([
            'message' => 'success'
        ]);
    }
}
