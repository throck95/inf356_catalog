<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use DB;

class SongsController extends Controller
{
    /**
     * SongsController constructor.
     */
    public function __construct(Song $song, Request $request){
        $this->song = $song;
        $this->request = $request;
    }

    public function songs() {
        //$songs = DB::table("songs")->get();
        $songs = $this->song->all();
        return view("songs.songs")->with("songs",$songs);
    }

    public function getSongById($id) {
        //$song = DB::statement("select * from beachboys.songs where id=" . $id);
        try{
            $song = $this->song->findOrFail($id);
            //$song["lyrics"] = str_replace("\\n","<br />",$song->lyrics);
            return view("songs.song")->with("song",$song);
        }
        catch(ModelNotFoundException $mnfe) {
            return view("songs.songnotfound");
        }
    }

    public function getSongByTitle($slugTitle) {  //method injection
        $t = $this->song->slugToTitle($slugTitle);
        //$song = $song->where("title",$t)->first();
        $song = $this->song->whereTitle($t)->first();
        //$song["lyrics"] = str_replace("\\n","<br />",$song->lyrics);
        return view("songs.song")->with(compact("song"));
    }

    public function edit($slug) {
        $title = $this->song->slugToTitle($slug);
        $song = $this->song->where("title",$title)->first();
        return view("songs.edit",compact("song"));
    }

    public function update($slug) {
        //dd($this->request->input());
        //dd($this->request->get("title"));
        $title = $this->song->slugToTitle($slug);
        $song = $this->song->whereTitle($title)->first();
        //$song->title = $this->request->get("title");
        //$song->lyrics = $this->request->get("lyrics");
        $array = ["title"=>$this->request->get("title"),"lyrics"=>$this->request->get("lyrics")];
        $song->fill($array)->save();
        //$song->save();
        return redirect("songs");
    }
}
