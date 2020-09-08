<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginAndRegisterController.php extends Controller
{
    public function login()
    {
        return view('Site.index',compact('login'));
    }
}
