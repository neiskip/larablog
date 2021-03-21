<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $posts = Post::join('users', 'author_id', '=', 'users.id')
                     ->where('title', 'like', '%'.$request->search.'%')
                     ->orWhere('descr', 'like', '%'.$request->search.'%')
                     ->orWhere('name', 'like', '%'.$request->search.'%')
                     ->orderBy('posts.created_at', 'desc')
                     ->get();
            return view('posts.index', compact('posts'));
        }
        $posts = Post::join('users', 'author_id', '=', 'users.id')
                ->orderBy('posts.created_at', 'desc')
                ->paginate(4);
        Paginator::useBootstrap();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->short_title = Str::length($request->title)>30 ? Str::substr($request->title, 0, 30).'...' : $request->title;
        $post->descr = $request->descr;
        $post->author_id = Auth::user()->id;

        if($request->file('img')){
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $post->img = $url;
        }
        $post->save();

        return redirect()->route('post.index')->with('success', 'Пост успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::join('users', 'author_id', '=', 'users.id')
               ->find($id);
        if(!$post)
            return abort(404);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(!$post)
            return abort(404);
        if(@$post->author_id == Auth::user()->id || Auth::user()->id == 6){
            return view('posts.edit', compact('post'));
        }else{
            return redirect()->route('post.index')->withErrors('Недостаточно прав для редактирования данного поста');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        if(!$post)
            return abort(404);
        if(@$post->author_id == Auth::user()->id || Auth::user()->id == 6){
            $post->title = $request->title;
            $post->short_title = Str::length($request->title)>30 ? Str::substr($request->title, 0, 30).'...' : $request->title;
            $post->descr = $request->descr;

            if($request->file('img')){
                $path = Storage::putFile('public', $request->file('img'));
                $url = Storage::url($path);
                $post->img = $url;
            }

            $post->update();
            $id = $post->post_id;
            return redirect()->route('post.show', ['post'=> $id])->with('success', 'Пост успешно отредактирован');
        }else{
            return redirect()->route('post.index')->withErrors('Недостаточно прав для редактирования данного поста');
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
        $post = Post::find($id);
        if(!$post)
            return abort(404);
        if(@$post->author_id == Auth::user()->id || Auth::user()->id == 6){
            $post->delete();
            return redirect()->route('post.index')->with('success', 'Пост успешно удален');
        }else{
            return redirect()->route('post.index')->withErrors('Недостаточно прав для удаления данного поста');
        }
    }
}
