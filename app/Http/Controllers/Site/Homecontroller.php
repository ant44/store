<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homecontroller extends Controller
{


    public function showHome()
    {
        $namee = "kjkjkjkjkjk";

        return view('Site.index',compact('namee'));
    }
}
