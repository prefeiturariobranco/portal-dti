<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error404(Request $request){
        return view('error.404');
    }

    public function error500(Request $request){
        return view('error.500');
    }
}
