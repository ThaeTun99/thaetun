<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctor = new Doctor();
        $doctorList = $doctor->getAll();

        // dd("create");
        return view("Room.addHistory", 
        [
            "doctor" => $doctorList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $history = new History();
        $history->insert($request);

        // return redirect("/history");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd("show id is $id");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
