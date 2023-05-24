<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SignupController extends Controller
{
    public function signup(SignupRequest $request){
        
        Log::channel("signlog")
        ->info("$request->username is signup in our system.");

        return redirect("/home");
    }
}
