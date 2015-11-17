<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song as Song;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreateSongRequest;

class MySongsController extends Controller
{
    public function __construct(Song $song, Request $request){
        $this->song = $song;
        $this->request = $request;
    }

    public function index()
    {
        $songs = $this->song->all();
        return view("songs.songs")->with("songs",$songs);
    }

    public function create()
    {
        return view("songs.create");
    }

    public function store(CreateSongRequest $csRequest)
    {
        $this->song->title = $this->request->title;
        $this->song->lyrics = $this->request->lyrics;
        $this->song->save();
        return redirect("songs");
    }

    public function show($id)
    {
        if(is_numeric($id)) {
            $song = $this->song->find($id);
        }
        else {
            $t = $this->song->slugToTitle($id);
            $song = $this->song->whereTitle($t)->first();
        }
        return view("songs.song")->with(compact("song"));
    }

    public function edit($id)
    {
        if(is_numeric($id)) {
            $song = $this->song->find($id);
        }
        else {
            $t = $this->song->slugToTitle($id);
            $song = $this->song->whereTitle($t)->first();
        }
        return view("songs.edit",compact("song"));
    }

    public function update($id)
    {
        if(is_numeric($id)) {
            $song = $this->song->find($id);
        }
        else {
            $t = $this->song->slugToTitle($id);
            $song = $this->song->whereTitle($t)->first();
        }
        //$array = ["title"=>$this->request->get("title"),"lyrics"=>$this->request->get("lyrics")];
        $song->fill($this->request->input())->save();
        //$song->save();
        return redirect("songs");
    }

    public function destroy($id)
    {
        $song = $this->song->find($id);
        $song->delete();
        return Redirect::route("songs.index");
    }
}
