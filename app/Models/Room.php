<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Room extends Model
{
    use HasFactory;

    public function getAll()
    {
        Log::channel("roomlog")
        ->info("end getAll function of RoomModel.");

        return DB::table("rooms")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->take(4)
        ->get();

    }

    public function seeAll()
    {
        Log::channel("roomlog")
        ->info("end seeAll function of RoomModel.");

        return DB::table("rooms")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->paginate(7);
    }

    public function allListPage()
    {

        return DB::table("rooms")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->count();
    }

    public function insert(Request $request)
    {
        Log::channel("roomlog")
        ->info("start insert function of RoomModel.");

        DB::table("rooms")
        ->insert([
            "roomNumber" => $request->roomNumber,
            "total" => $request->total,
            "price" => $request->price,
            "status" => $request->status
        ]);
    }
    public function getRoomById($id)
    {
        Log::channel("roomlog")
        ->info("end getRoomById function of RoomModel.");

        return DB::table("rooms")
        ->find($id);
    }

    public function updateRoomById($id,Request $request)
    {
        Log::channel("roomlog")
        ->info("start updateRoomById function of RoomModel.");

        DB::table("rooms")
        ->where("id","=",$id)
        ->update([
            "roomNumber" => $request->roomNumber,
            "total" => $request->total,
            "price" => $request->price,
            "status" => $request->status
        ]);
    }

    public function DeleteRoomList($id)
    {
        Log::channel("roomlog")
        ->info("start update(Delete) function of RoomModel.");

        DB::table("rooms")
        ->where("id","=",$id)
        ->update([
            "del_flg" => 1
        ]);
    }
}
