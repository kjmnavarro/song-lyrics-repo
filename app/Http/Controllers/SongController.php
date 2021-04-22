<?php

namespace App\Http\Controllers;

use App\Song;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Auth::id(); 

        $songs = Song::where('user_id', $id)
                    ->get();

        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $song = new Song;
        $song->user_id = $id;
        $song->title = $request->title;
        $song->artist = $request->artist;
        $song->lyrics = $request->lyrics;
        $song->save();

        return redirect('/songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        $songs = Song::join('users', 'users.id', '=', 'songs.user_id')
                    ->where('songs.id', $song->id)
                    ->get();

        return view('songs.show', compact('songs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $songs = Song::join('users', 'users.id', '=', 'songs.user_id')
                    ->where('songs.id', $song->id)
                    ->get();

        return view('songs.edit', compact('songs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $songs = Song::find($song->id);

        $song->title = $request->title;
        $song->artist = $request->artist;
        $song->lyrics = $request->lyrics;

        $songs->save();

        return redirect('/songs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $songs = Song::find($song->id);
        $songs->delete();
        return redirect('/songs');
    }
}
