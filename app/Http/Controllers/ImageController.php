<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image as Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{
    public function __construct(Image $image, Request $request){
        $this->image = $image;
        $this->request = $request;
    }

    public function index()
    {
        $images = $this->image->all();
        return view("images.images")->with("images",$images);
    }


    public function create()
    {
        return view("images.create");
    }


    public function store()
    {
        return dd($this->request);
        //$saveButton = $this->request->saveButton;
        //$formData = Input::get('text');
        //$info = Input::get('info');
        //return "I'm on the image.store";
        //return dd($formData);
        //$this->request->file('imageUpload')->move(base_path() . '/public/images/homework2/', $imageName);
        //return Redirect::route("images.show");
    }


    public function show($id)
    {
        try{
            $image = $this->image->findOrFail($id);
            return view("images.image")->with(compact("image"));
        } catch(ModelNotFoundException $mnfe) {
            return view("images.imagenotfound");
        }

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $image = $this->image->find($id);
        $image->delete();
        return Redirect::route("images.index");
    }

    public function welcome() {
        return view("images.welcome");
    }
}
