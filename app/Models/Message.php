<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Message extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function getAll()
    {
        Log::channel("messagelog")
        ->info("end getAll function of MessageModel.");

        return DB::table("messages")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->take(4)
        ->get();

    }

    public function readMore()
    {
        Log::channel("messagelog")
        ->info("end readMore function of MessageModel.");

        return DB::table("messages")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->paginate(7);

    }
    public function allListPage()
    {

        return DB::table("messages")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->count();
    }

    public function getMessageById($id)
    {
        Log::channel("messagelog")
        ->info("end getMessageById function of MessageModel.");

        return DB::table("messages")
        ->find($id);
    }

    
    public function updateMessageById($id,Request $request)
    {
        Log::channel("messagelog")
        ->info("start update function of MessageModel.");

        DB::table("messages")
        ->where("id","=",$id)
        ->update([
            "texts" => $request->texts,
            "type" => $request->type
        ]);
    }

public function insertMessage(Request $request)
{
    $validatedData = $request->validate([
        'texts' => 'required',
        'type' => 'nullable',
    ]);

    $date = Carbon::now();

    Log::channel("messagelog")
        ->info("start insert function of MessageModel.");

    DB::table("messages")
    ->insert([
        "texts" => $validatedData['texts'],
        "type" => $validatedData['type'],
        "created_at" => $date,
    ]);
}

public function DeleteMessageList($id)
    {
        Log::channel("messagelog")
        ->info("start update(Delete) function of MessageModel.");

        DB::table("messages")
        ->where("id","=",$id)
        ->update([
            "del_flg" => 1
        ]);
    }

}

