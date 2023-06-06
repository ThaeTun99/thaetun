<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;
    public function insertPatient($request)
    {
        $patient = new Patient();
        $patient->p_name = $request->p_name;
        $patient->p_age = $request->p_age;
        $patient->p_address = $request->p_address;
        $patient->p_phone = $request->p_phone;
        $patient->gender = $request->gender;
        $patient->save();


        $doctor = Doctor::find($request->drCount);
        $patient->doctors()->attach($doctor);
    }

    public function updatePatientById($id, Request $request)
    {
        $patient = Patient::find($id);

        $patient->doctors()->detach();

        $doctorIds = $request->input('drCount', []);
        $doctors = Doctor::whereIn('id', $doctorIds)->get();

        $patient->doctors()->attach($doctors); // 
    }
    public function getPatientById($id)
    {
        return Patient::find($id);
    }

    public function getAll()
    {
        return Patient::where('del_flg', 0)
        ->orderBy("id", "DESC")
        ->paginate(5);
    }

    public function getAllPatient()
    {
        // return Patient::all();

        return Patient::where('del_flg', 0)
            ->orderBy("id", "DESC")
            ->get();
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    public function DeletePatientById($id)
    {
        DB::table("patients")
            ->where("id", "=", $id)
            ->update([
                "del_flg" => 1
            ]);
    }
}
