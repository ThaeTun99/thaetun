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

        return Doctor::where("del_flg", "=", 0)
            ->orderBy("doctors.id", "DESC")
            ->paginate(5);
    }

    public function getDoctorById($id)
    {
        return Doctor::find($id);
    }

    public function updateDoctorById($id, Request $request)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->age = $request->age;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;

        $doctor->doctorInfo->special = $request->special;
        $doctor->doctorInfo->experience = $request->experience;
        $doctor->doctorInfo->liscen = $request->liscen;

        $doctor->save();

        $historyData = $request->only(['hospitalName', 'level', 'startDate', 'endDate', 'exper']);
        $historyCount = count($historyData['hospitalName']);
        $updatedHistories = [];

        for ($i = 0; $i < $historyCount; $i++) {
            if (isset($doctor->histories[$i])) {
                $hist = new History();
                $hist = $doctor->histories[$i];
                $hist->hospitalName = $historyData['hospitalName'][$i];
                $hist->level = $historyData['level'][$i];
                $hist->startDate = $historyData['startDate'][$i];
                $hist->endDate = $historyData['endDate'][$i];
                $hist->exper = $historyData['exper'][$i];
                $updatedHistories[] = $hist;
            }
        }

        $doctor->doctorInfo->save();
        $doctor->histories()->saveMany($updatedHistories);
    }

    public function DeleteDoctorById($id)
    {
        // $doctor = Doctor::find($id);
        // $doctor->delete();

        DB::table("doctors")
            ->where("id", "=", $id)
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

    public function insert(Request $request)
    {
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

        $doctor->doctorInfo()->save($doctorInfo);

        if (is_array($request["hospitalName"])) {
            $count = count($request["hospitalName"]);

            for ($i = 0; $i < $count; $i++) {
                $history = new History();
                $history->hospitalName = $request["hospitalName"][$i];
                $history->level = $request["level"][$i];
                $history->startDate = $request["startDate"][$i];
                $history->endDate = $request["endDate"][$i];
                $history->exper = $request["exper"][$i];

                $histories[] = $history;
                $doctor->histories()->saveMany($histories);
            }
            $doctor->doctorInfo()->save($doctorInfo);
            $doctor->histories()->saveMany($histories);
        }
        $doctor->doctorInfo()->save($doctorInfo);
    }
}
