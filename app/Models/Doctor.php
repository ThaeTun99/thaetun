<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    use HasFactory;

    public function getAll()
    {
        // return DB::table("doctors")
        // ->join('doctor_infos','doctors.id','=','doctor_infos.doctor_id')
        // ->orderBy("doctors.id","DESC")
        // // ->take(5)
        // ->get();

        return Doctor::
        where("del_flg","=",0)
        ->orderBy("doctors.id", "DESC")
        ->paginate(5);
    }

    public function getDoctorById($id){
        return Doctor::find($id);
    }

    public function updateDoctorById($id,Request $request){
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->age = $request->age;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;

        $doctor->doctorInfo->special = $request->special;
        $doctor->doctorInfo->experience = $request->experience;
        $doctor->doctorInfo->liscen = $request->liscen;

        $doctor->save();
        // $doctor->doctorInfo->save();
        $history = $doctor->histories->where("id",1)->first();
        if($history){
        $history->hospitalName = $request->hospitalName;
        $history->level = $request->level;
        $history->startDate = $request->startDate;
        $history->endDate = $request->endDate;
        $history->exper = $request->exper;
        $history->save();

        }
        $history = $doctor->histories->where("id",2)->first();
        if($history){
            $history->hospitalName = $request->hospitalName2;
            $history->level = $request->level2;
            $history->startDate = $request->startDate2;
            $history->endDate = $request->endDate2;
            $history->exper = $request->exper2;
            
            $history->save();
        }
        
        $doctor->doctorInfo->save();

    }

    public function DeleteDoctorById($id){
        // $doctor = Doctor::find($id);
        // $doctor->delete();

        DB::table("doctors")
        ->where("id","=",$id)
        ->update([
            "del_flg" => 1
        ]);
    }

    public function doctorInfo()
    {
        return $this->hasOne(DoctorInfo::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function insert(Request $request){
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->age = $request->age;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->save();


        $doctorInfo = new DoctorInfo();
        $doctorInfo->special = $request->special;
        $doctorInfo->experience = $request->experience;
        $doctorInfo->liscen = $request->liscen;
        
        // $doctor->doctorInfo()->save($doctorInfo);

        $history1 = new History();
        $history1->hospitalName = $request->hospitalName;
        $history1->level = $request->level;
        $history1->startDate = $request->startDate;
        $history1->endDate = $request->endDate;
        $history1->exper = $request->exper;

        $history2 = new History();
        $history2->hospitalName = $request->hospitalName2;
        $history2->level = $request->level2;
        $history2->startDate = $request->startDate2;
        $history2->endDate = $request->endDate2;
        $history2->exper = $request->exper2;

        
        $doctor->doctorInfo()->save($doctorInfo);
        $doctor->histories()->saveMany([$history1,$history2]);

    }
}
