<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginAndRegisterController extends Controller {

    public function login()
    {
        return view('Site.index', compact('login'));
    }
}
