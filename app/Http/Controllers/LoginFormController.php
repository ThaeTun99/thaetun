<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{
    public function loginForm(Request $request){
        
        return redirect("/home");
    }
}
