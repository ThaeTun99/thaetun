<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getAll()
    {
        // dd($doctorList);
        return Doctor::where("del_flg", "=", 0)
            ->orderBy("id", "DESC")
            ->paginate(3);
    }
    public function getAllDoctor()
    {
        // dd($doctorList);
        return Doctor::where("del_flg", "=", 0)
            ->orderBy("id", "DESC")
            ->get();
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

        if ($request->hasFile("drimage")) {
            $file = $request->file("drimage");
            $path = $file->store('doctorProfile');
            $doctor->d_photo = $path;
        }


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


    public function insert(Request $request)
    {
        $path = null;
        if ($request->hasFile("drimage")) {
            // dd("yes");
            $file = $request->file("drimage"); //access or get file
            // save on server
            $path = $file->store('doctorProfile');
            // dd($path);
        }

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->age = $request->age;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->d_photo = $path;
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

        $patient = Patient::find($request->drCount);
        $doctor->patients()->attach(($patient));
        // $patient->doctors()->attach($request->input('drCount'));

        $doctor->doctorInfo()->save($doctorInfo);
        // dd($request->all());
    }

    public function doctorInfo()
    {
        return $this->hasOne(DoctorInfo::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
}
