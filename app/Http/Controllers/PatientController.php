<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("index");
        $patient = new Patient();
        $patientList = $patient->getAll();

        return View("patient.patientList", [
            "patients" => $patientList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctor = new Doctor();
        $doctorList = $doctor->getAllDoctor();

        // dd($doctorList);

        return view("patient.addPatient", [
            "doctor" => $doctorList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $patient = new Patient();
        $patient->insertPatient($request);

        return redirect("/patient");
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {

        $patient = new Patient();
        $patientInfo = $patient->getPatientById($id);
        // dd($patientInfo);
        foreach ($patientInfo->doctors as $key => $doctor) {
            $doctors = $doctor;
        }
        // dd($patientInfo);

        return view("Patient.showPatient", [
            "patients" => $patientInfo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = new Doctor();
        $doctorList = $doctor->getAll();

        // dd("edit id is $id");
        $patient = new Patient();
        $patientInfo = $patient->getPatientById($id);

        $patientList = $patient->getAllPatient();

        foreach ($patientInfo->doctors as $key => $doctor) {
            $doctors = $doctor;
        }
        // dd($patientInfo);

        return view("Patient.editPatient",[
            "patientInfo" => $patientInfo,
            "doctor" => $doctorList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("update");
        $patient = Patient::find($id);
        // $patient = new Patient();
        $patient->updatePatientById($id,$request);

        return redirect("/patient");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("destroy");
        $patient = new Patient();
        $patient->DeletePatientById($id);

        return redirect("/patient");
    }
}
