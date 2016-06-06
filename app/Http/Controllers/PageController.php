<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use View;
use App\Models\Image;
use Redirect;

class PageController extends BaseController{

    public function showHome(){
        return \View::make('home', ['images' => Image::latest(20)]);
    }

    public function showSingle($id){
        return View::make('image', ['image' => Image::find($id)]);
    }

    public function showRandom(){
        return Redirect::route('singleImage', array(Image::random(1)->id));
        //return View::make('image', ['image' => Image::random(1)->first()]);
    }

    /*public function showPicks(){
        return View::make('picks', ['picks' => EditorsPick::latest(20)]);
    }*/

}
