<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Drug;
use App\Models\Room;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        Log::channel("customlog")
        ->info("start index function of HomeController.");

        Log::channel("signlog")
        ->info("start index function of HomeController.");

        Log::channel("homelog")
        ->info("start index function of HomeController.");

        Log::channel("pointlog")
        ->info("start index function of HomeController.");

        Log::channel("druglog")
        ->info("start index function of HomeController.");

        Log::channel("messagelog")
        ->info("start index function of HomeController.");
        
        Log::channel("roomlog")
        ->info("start index function of HomeController.");

        $room = new Room();
        $roomList = $room->getAll();
        // dd($roomList);

        $message = new Message();
        $messageList = $message->getAll();

        $drugs = new Drug();
        $drugList = $drugs->getAll();

        $points = new Appointment();
        $pointList = $points->getAll();

        Log::channel("customlog")
        ->info("end index function of HomeController.");

        Log::channel("signlog")
        ->info("end index function of HomeController.");

        Log::channel("homelog")
        ->info("end index function of HomeController.");

        Log::channel("pointlog")
        ->info("end index function of HomeController.");

        Log::channel("druglog")
        ->info("end index function of HomeController.");

        Log::channel("messagelog")
        ->info("end index function of HomeController.");

        Log::channel("roomlog")
        ->info("end index function of HomeController.");


        return View("Room.roomList", [
            "rooms" => $roomList,
            "messages" => $messageList,
            "drugs" => $drugList,
            "points" => $pointList,
        ]);
    }
}
