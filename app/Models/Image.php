<?php

namespace App\Models;

use Eloquent;
use Redirect;
use DB;

class Image extends Eloquent {

    /**
     *    * The database table used by the model.
     *       *
     *           * @var string
     *               */
    protected $table = 'images';

    /**
     *    * The attributes excluded from the model's JSON form.
     *       *
     *           * @var array
     *               */
    protected $fillable = array('local_path', 'instagram_id', 'link', 'instagram_code', 'username', 'votes', 'date');


    public static function latest($num){
        return static::orderBy('date', 'DESC')->simplePaginate($num);
    }

    public static function popular($num){
        return static::orderBy('votes', 'DESC')->simplePaginate($num);
    }

    public static function random($num){

        $maxId = DB::table('images')->orderBy('id', 'DESC')->limit(1)->get();
        if(sizeof($maxId)>0){

            $selected = null;
            while(is_null($selected)){
                $selected = static::find(mt_rand(0, $maxId[0]->id));
            }
            return $selected;
        }else{
            return Redirect::back();
        }
    }

}
