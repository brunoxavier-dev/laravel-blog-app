<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        if (Auth::check() === true) {            
            return view('home', compact('posts'));
        }
        return view('welcome', compact('posts'));        
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
    public function store(Request $request)
    {         
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        if ($post) {
            return redirect()->route('dashboard');
        }      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {        
        if (Auth::check() === true) {            
            return view('posts.show', compact('post'));
        }
        return redirect()->route('welcome');       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {        
        if (Auth::check() === true) {            
            return view('posts.edit', compact('post'));
        }
        return redirect()->route('welcome');   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (Auth::check() === true) {    
            $post['title'] = $request->title;
            $post['description'] = $request->description;
            $post->save();    
            if ($post) {
                return redirect()->route('dashboard');
            }
        }
        return redirect()->route('welcome');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Auth::check() === true) {    
            $post->delete();
            return redirect()->route('dashboard');
        }
        return redirect()->route('welcome');
    }
}