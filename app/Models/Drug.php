<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Drug extends Model
{
    use HasFactory;

    public function getAll()
    {
        Log::channel("druglog")
        ->info("end getAll function of DrugModel.");

        return DB::table("drugs")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->take(5)
        ->get();

    }

    public function checkAll()
    {
        Log::channel("druglog")
        ->info("end checkAll function of DrugModel.");

        return DB::table("drugs")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->paginate(7);

    }

    public function allListPage()
    {

        return DB::table("drugs")
        ->orderBy("id","DESC")
        ->where("del_flg","=",0)
        ->count();
    }

    public function insert(Request $request)
    {
        Log::channel("druglog")
        ->info("start insert function of DrugModel.");

        $path = null;
        if ($request->hasFile("drimage")) {
            // dd("yes");
            $file = $request->file("drimage"); //access or get file
            // save on server
            $path = $file->store('drugPhoto');
            // dd($path);
        }

        DB::table("drugs")
        ->insert([
            "drugName" => $request->drugName,
            "amount" => $request->amount,
            "eachPrice" => $request->eachPrice,
            "stock" => $request->stock,
            "dg_photo" => $path,
        ]);
    }

    public function getDrugById($id)
    {
        Log::channel("druglog")
        ->info("end getDrugById function of DrugModel.");

        return DB::table("drugs")
        ->find($id);
    }
    
    public function updateDrugById($id,Request $request)
    {
        Log::channel("druglog")
        ->info("start update function of DrugModel.");

        $path = null;
        if ($request->hasFile("drimage")) {
            // dd("yes");
            $file = $request->file("drimage"); //access or get file
            // save on server
            $path = $file->store('drugPhoto');


        DB::table("drugs")
        ->where("id","=",$id)
        ->update([
            "drugName" => $request->drugName,
            "amount" => $request->amount,
            "eachPrice" => $request->eachPrice,
            "stock" => $request->stock,
            "dg_photo" => $path,
        ]);
    }
    DB::table("drugs")
    ->where("id","=",$id)
    ->update([
        "drugName" => $request->drugName,
        "amount" => $request->amount,
        "eachPrice" => $request->eachPrice,
        "stock" => $request->stock,
        // "dg_photo" => $path,
    ]);
    }
    public function DeleteDrugList($id)
    {
        Log::channel("druglog")
        ->info("start update(Delete) function of DrugModel.");

        DB::table("drugs")
        ->where("id","=",$id)
        ->update([
            "del_flg" => 1
        ]);
    }
}
