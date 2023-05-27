<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorInfo;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("index");

        $doctor = new Doctor();
        $doctorList = $doctor->getAll();

        foreach ($doctorList as $key => $doctor) {
            $doctor_info = $doctor->doctorInfo;
        }
        // dd($doctorList);
        return View("Room.doctorList",[
            "doctor" => $doctorList,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("create");
        return view("Room.addDoctor");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $doctor = new Doctor();
        $doctor->insert($request);


        return redirect("/doctor");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd("edit id is $id");

        $doctor = new Doctor();
        $doctorInfo = $doctor->getDoctorById($id);
        $Drspecial = $doctorInfo->doctorInfo;

        // $history = $doctorInfo->histories;

        // dd($doctorInfo);

        foreach ($doctorInfo->histories as $key => $history) {
            $histories =  $history;
        }
        return view("Room.editDoctor",[
            "doctorInfo" => $doctorInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // dd("update id is $id");

        $doctor = new Doctor();
        $doctor->updateDoctorById($id,$request);

        return redirect("/doctor");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("delete id is $id");
        $doctor = new Doctor();
        $doctor->DeleteDoctorById($id);

        return redirect("/doctor");
    }
}
