<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware("checkLogin")->except(["index", "show"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::channel("pointlog")
            ->info("start index function of AppointmentController.");


        $points = new Appointment();
        $pointList = $points->pointAll();
        $pointPage = $points->allListPage();


        Log::channel("pointlog")
            ->info("end index function of AppointmentController.");

        return view("Room.pointAll", [
            "points" => $pointList,
            "pointPage" => $pointPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::channel("pointlog")
            ->info("end create function of AppointmentController.");

        $doctor = new Doctor();
        $doctorList = $doctor->getAll();
        // dd($doctorList);
        // dd("create");
        return view("Room.addPoint", [
            "doctor" => $doctorList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("store");

        Log::channel("pointlog")
            ->info("start store function of AppointmentController.");



        $points = new Appointment();
        $points->insert($request);

        Log::channel("pointlog")
            ->info("end store function of AppointmentController.");

        return redirect("/point");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::channel("pointlog")
            ->info("start show function of AppointmentController.");

        $points = new Appointment();
        $pointInfo = $points->getPointById($id);

        Log::channel("pointlog")
            ->info("end show function of AppointmentController.");


        return view(
            "Room.showPoint",
            [
                "pointInfo" => $pointInfo
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd("edit id is $id");
        // return view("Room.editPoint");

        Log::channel("pointlog")
            ->info("start edit function of AppointmentController.");


        $points = new Appointment();
        $pointInfo = $points->getPointById($id);

        Log::channel("pointlog")
            ->info("end edit function of AppointmentController.");

        return view(
            "Room.editPoint",
            [
                "pointInfo" => $pointInfo
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::channel("pointlog")
            ->info("start update function of AppointmentController.");

        // dd("update id is $id");
        $points = new Appointment();
        $points->updatePointById($id, $request);

        Log::channel("pointlog")
            ->info("end update function of AppointmentController.");

        return redirect("/point");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("delete id is $id");
        Log::channel("pointlog")
            ->info("start destroy function of AppointmentController.");

        $points = new Appointment();
        $points->DeletePointList($id);

        Log::channel("pointlog")
            ->info("end destroy function of AppointmentController.");


        return redirect("/point");
    }
}
