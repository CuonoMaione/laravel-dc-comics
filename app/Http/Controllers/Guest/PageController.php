<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    //

public function index(){

        $navLink = config('db.navLink');
        $dcComics = Comic::all() ;
        return view('guest.welcome' , compact('navLink', 'dcComics') );
    }

}