<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getProfileImage(Request $request){
        $img = 'storage/usuarios/' . $request->get('name');
        return $img;
    }

    public function getBannerImage(Request $request){
        $img = 'storage/banner/' . $request->get('name');
        return $img;
    }
}
