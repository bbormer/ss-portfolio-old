<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class Gallery 
{
    public static function all() {
        return [json_decode(Storage::disk('local')->get('json/gallery.json'), true)];
    }

    public static function find($id) {
        $galleries = self::all()[0];

        foreach($galleries as $gallery) {
            if($gallery['id'] == $id) {
                return $gallery;
            }
        } 
    }
}
