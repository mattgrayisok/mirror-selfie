<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use View;
use App\Models\Image;
use Redirect;
use Intervention\Image\ImageManagerStatic as InterventionImage;

class MetaImageController extends BaseController{

    public function generate($id){
        
        $image = Image::find($id);
        if(is_null($image)){
            return Redirect::to(asset('assets/images/facebook.png'));
        }
        
        $image = file_get_contents($image->path);
        $img = InterventionImage::make($image);
        $img2 = InterventionImage::make($image);
        $img2->flip();
        $img2->crop($img2->width()/2, $img2->height(), $img2->width()/2, 0);
        $img->insert($img2, 'top-left', $img->width()/2, 0);
        return $img->response('jpg');

    }

}
