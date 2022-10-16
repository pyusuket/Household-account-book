<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('post.index', compact('posts'));
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
        $request->validate([
            'day' => ['required', 'date'],
            'selection' => ['required', 'string'],
            'main' => ['required', 'string'],
            'sub' => ['required', 'string'],
            'amount' => ['required', 'integer' , 'min:1'],
            'comment' => ['nullable', 'string'],
        ]);

        Post::create([
            'day' => $request->day,
            'selection' => $request->selection,
            'main' => $request->main,
            'sub' => $request->sub,
            'amount' => $request->amount,
            'comment' => $request->comment,
        ]);

        return redirect()->route('post.create')->with(['message' => '投稿が完了しました。', 'status' => 'info']);
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
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->day = $request->day;
        $post->selection = $request->selection;
        $post->main = $request->main;
        $post->sub = $request->sub;
        $post->amount = $request->amount;
        $post->comment = $request->comment;
        $post->save();

        return redirect()->route('post.index')->with(['message' => '投稿を更新しました。', 'status' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('post.index')->with(['message' => '投稿を削除しました。', 'status' => 'alert']);
    }
}
