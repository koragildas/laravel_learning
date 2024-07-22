<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function greeting(){
        dd("Salut tout le monde");
    }
    public function information(){
        dd("J   e capte bien laravel");
    }
    public function tooday(){
        dd("Aujord'hui nous vendredi");
    }
    public function name(){
        dd("Mon nom est kgb");
    }
}
