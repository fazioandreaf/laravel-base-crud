<?php

namespace App\Http\Controllers;
use App\Ospiti;

use Illuminate\Http\Request;

class controller_db extends Controller
{
    function home(){
        $ospiti=Ospiti::all();
        // dd($ospiti);
        return view('pages.home',compact('ospiti'));
    }
}
