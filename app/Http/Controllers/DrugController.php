<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DrugController extends Controller
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
        Log::channel("druglog")
            ->info("start index function of DrugController.");

        $drugs = new Drug();
        $drugList = $drugs->checkAll();
        $drugPage = $drugs->allListPage();

        Log::channel("druglog")
            ->info("end index function of DrugController.");

        return view(
            "Room.checkAll",
            [
                "drugs" => $drugList,
                "drugPage" => $drugPage,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::channel("druglog")
            ->info("end create function of DrugController.");

        return view("Room.addDrug");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Log::channel("druglog")
            ->info("start store function of DrugController.");

        $drugs = new Drug();
        $drugs->insert($request);

        Log::channel("druglog")
            ->info("end store function of DrugController.");


        return redirect("/drug");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::channel("druglog")
            ->info("start show function of DrugController.");

        $drugs = new Drug();
        $drugInfo = $drugs->getDrugById($id);

        Log::channel("druglog")
            ->info("end show function of DrugController.");


        return view(
            "Room.showDrug",
            [
                "drugInfo" => $drugInfo
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd("edit id is $id");

        Log::channel("druglog")
            ->info("start edit function of DrugController.");

        $drugs = new Drug();
        $drugInfo = $drugs->getDrugById($id);

        Log::channel("druglog")
            ->info("end edit function of DrugController.");

        return view(
            "Room.editDrug",
            [
                "drugInfo" => $drugInfo
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("update id is $id");

        Log::channel("druglog")
            ->info("start update function of DrugController.");

        $drugs = new Drug();
        $drugs->updateDrugById($id, $request);

        Log::channel("druglog")
            ->info("end update function of DrugController.");

        return redirect("/drug");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("delete id is $id");

        Log::channel("druglog")
            ->info("start destroy function of DrugController.");

        $drugs = new Drug();
        $drugs->DeleteDrugList($id);

        Log::channel("druglog")
            ->info("end destroy function of DrugController.");

        return redirect("/drug");
    }
}
