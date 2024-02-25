<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return view ('songs.index', ['songs'=> $songs]);
        
    }
    public function song($id){
        $song = Song::find($id);
        return view('songs.song', ['song'=>$song]);

    }
    public function share(){
        return view('songs.share');
    }
    public function store(Request $request){

        $data=$request->validate([
            'songtitle'=> 'required',
            'artist'=> 'required',
            'description'=> 'required',
            'songlink'=> 'required',
            'lyrics'=> 'required',
            'platform'=> 'required',
        ]);

        $newProduct = Song::create($data);
        return redirect(route('index'));
    }



     
    public function update ($id)
    {
        $song = Song::find($id);
        return view('songs.update', ['song'=>$song]);
    }
    public function edit (Request $request,$id)
    {
        $song = Song::find($id);
        $input= $request->all();
        $song->update($input);
        return redirect ('index')->with('flash_message', 'Song Updated!');
    }

    
}
