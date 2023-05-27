<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginFormController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource("/home", HomeController::class);

// Route::middleware("checkLogin")->group(function () {

Route::resource("/room", RoomController::class);

Route::resource("/message", MessageController::class);

Route::resource("/drug", DrugController::class);

Route::resource("/point", AppointmentController::class);
// });


Route::get("/login", function () {
    return view("login");
});

Route::post("/login", [LoginController::class, "login"]);


Route::get("/signup", function () {
    return view("signup");
});

Route::post("/signup", [SignupController::class, "signup"]);

Route::get("/log", function () {
    return view("AsWish.loginForm");
});

Route::post("/log", [LoginFormController::class, "loginForm"]);

Route::get("/lang/{locale}", function ($locale) {
    // return $locale;
    // App::setLocale($locale);

    session()->put("locale",$locale);

    return redirect()->back();
});

Route::resource("/doctor", DoctorController::class);

Route::resource("/history", HistoryController::class);

