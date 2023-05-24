<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{

    public function __construct(){
        $this->middleware("checkLogin")->except(["index","show"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::channel("messagelog")
        ->info("start index function of MessageController.");

        $messages = new Message();
        $messageList = $messages->readMore();
        $messagePage = $messages->allListPage();

        Log::channel("messagelog")
        ->info("end index function of MessageController.");

        return View("Room.messageAll", [
            "messages" => $messageList,
            "messagePage" => $messagePage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::channel("messagelog")
        ->info("end create function of MessageController.");

        return view("Room.sendMessage");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::channel("messagelog")
        ->info("start store function of MessageController.");

        $message = new Message();
        $message->insertMessage($request);

        Log::channel("messagelog")
        ->info("end store function of MessageController.");

        return redirect("/message");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Log::channel("messagelog")
        ->info("start show function of MessageController.");

        $message = new Message();
        $messageInfo = $message->getMessageById($id);

        Log::channel("messagelog")
        ->info("end show function of MessageController.");

        return view("Room.showMessage",
    [
        "messageInfo" => $messageInfo
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Log::channel("messagelog")
        ->info("start edit function of MessageController.");

        $message = new Message();
        $messageInfo = $message->getMessageById($id);
        
        Log::channel("messagelog")
        ->info("end edit function of MessageController.");

        return view("Room.editMessage",
    [
        "messageInfo" => $messageInfo]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::channel("messagelog")
        ->info("start update function of MessageController.");

        $message = new Message();
        $message->updateMessageById($id,$request);

        Log::channel("messagelog")
        ->info("end update function of MessageController.");

        return redirect("/message");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Log::channel("messagelog")
        ->info("start destroy function of MessageController.");

        // dd("Delete id is $id");
        $message = new Message();
        $message->DeleteMessageList($id);

        Log::channel("messagelog")
        ->info("end destroy function of MessageController.");

        return redirect("/message");
        
    }
}
