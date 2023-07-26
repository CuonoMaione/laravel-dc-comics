<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

public function index(){

        $navLink = config('db.navLink');
        $dcComics = config('db.dcComics');
        return view('guest.welcome' , compact('navLink', 'dcComics') );
    }

}