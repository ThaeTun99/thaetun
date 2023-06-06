<?php

namespace App\Http\Controllers;

use App\Models\Room;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoomController extends Controller
{

public function __construct(){
    $this->middleware("checkLogin")->except(["index","show"]);
}





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::channel("roomlog")
            ->info("start index function of RoomController.");

        $room = new Room();
        $roomList = $room->seeAll();
        $roomPage = $room->allListPage();
        // dd($roomList);

        Log::channel("roomlog")
            ->info("end index function of RoomController.");

        return View("Room.roomAll", [
            "rooms" => $roomList,
            "roomPage" => $roomPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::channel("roomlog")
            ->info("end create function of RoomController.");

            // dd(session("username"));

        return view("Room.addRoom");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        Log::channel("roomlog")
            ->info("start store function of RoomController.");

            if($request->hasFile("drimage")){
                // dd("yes");
                $file = $request->file("drimage");//access or get file
            }

        $room = new Room();
        $room->insert($request);

        Log::channel("roomlog")
            ->info("end store function of RoomController.");

        return redirect("/room");
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::channel("roomlog")
            ->info("start show function of RoomController.");

        $room = new Room();
        $roomInfo = $room->getRoomById($id);

        Log::channel("roomlog")
            ->info("end show function of RoomController.");

            // dd($roomInfo);
        return view(
            "Room.showRoom",
            [
                "roomInfo" => $roomInfo
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        Log::channel("roomlog")
            ->info("start edit function of RoomController.");

        $room = new Room();
        $roomInfo = $room->getRoomById($id);

        Log::channel("roomlog")
            ->info("end edit function of RoomController.");

        return view(
            "Room.editRoom",
            [
                "roomInfo" => $roomInfo
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::channel("roomlog")
            ->info("start update function of RoomController.");

        $room = new Room();
        $room->updateRoomById($id, $request);

        Log::channel("roomlog")
            ->info("end update function of RoomController.");

        return redirect("/room");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Log::channel("roomlog")
            ->info("start destroy function of RoomController.");

        $room = new Room();
        $room->DeleteRoomList($id);

        Log::channel("roomlog")
            ->info("end destroy function of RoomController.");

        return redirect("/room");
    }
}
