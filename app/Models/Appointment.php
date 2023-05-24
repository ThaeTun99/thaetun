<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Appointment extends Model
{
    use HasFactory;

    public function getAll()
    {
        Log::channel("pointlog")
        ->info("end getAll function of AppointmentModel.");

        return DB::table("appointments")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->take(3)
        ->get();

    }

    public function pointAll()
    {
        Log::channel("pointlog")
        ->info("end pointAll function of AppointmentModel.");

        return DB::table("appointments")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->paginate(7);

    }

    public function allListPage()
    {

        return DB::table("appointments")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->count();
    }

    public function getPointById($id)
    {
        Log::channel("pointlog")
        ->info("end getPointById function of AppointmentModel.");

        return DB::table("appointments")
        ->find($id);
    }

    public function insert(Request $request)
{
    Log::channel("pointlog")
    ->info("start insert function of AppointmentModel.");

    DB::table("appointments")
    ->insert([
        "docName" => $request->docName,
        "roomNo" => $request->roomNo,
        "date" => $request->date,
    ]);
}

public function updatePointById($id,Request $request)
    {
        Log::channel("pointlog")
        ->info("start update function of AppointmentModel.");

        DB::table("appointments")
        ->where("id","=",$id)
        ->update([
            "docName" => $request->docName,
            "roomNo" => $request->roomNo,
            "date" => $request->date,
        ]);
    }

    public function DeletePointList($id)
    {
        Log::channel("pointlog")
        ->info("start update (Delete) function of AppointmentModel.");

        DB::table("appointments")
        ->where("id","=",$id)
        ->update([
            "del_flg" => 1
        ]);
    }

}
