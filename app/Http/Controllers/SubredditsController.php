<?php

namespace App\Http\Controllers;

use App\Subreddits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubredditsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subreddits = Subreddits::latest()->get();

        return view('subreddits.index', [
            'subreddits' => $subreddits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subreddits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Subreddits;

        $post->title = request('title');
        $post->desc = request('desc');
        $post->slug = Str::slug(request('title'));
        $post->user_id = Auth::id();

        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subreddits  $subreddits
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $subreddits = Subreddits::where('slug', $slug)->firstOrFail();
        $posts = Subreddits::find(1)->post;

        return view('subreddits.show', [
            'subreddits' => $subreddits,
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subreddits  $subreddits
     * @return \Illuminate\Http\Response
     */
    public function edit(Subreddits $subreddits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subreddits  $subreddits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subreddits $subreddits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subreddits  $subreddits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subreddits $subreddits)
    {
        //
    }
}
