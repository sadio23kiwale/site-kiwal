<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kiwalController extends Controller
{
    public function index(){

        return view('accueil'); 
    }

    public function propos(){

        return view('propos');
    }

    public function service(){

        return view('service');
    }

    public function contact(){

        return view('contact');
    }

    public function tarif(){

        return view('tarif');
    }
}
