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
    function ospite_description($id){
        $single_ospite=Ospiti::findOrFail($id);
        // dd($single_ospite);
        return view('pages.single_ospite',compact('single_ospite'));


    }
}
