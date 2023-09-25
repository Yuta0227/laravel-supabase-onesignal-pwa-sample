<?php

namespace App\Http\Controllers;

use Berkayk\OneSignal\OneSignalClient;
use Illuminate\Http\Request;
use Illuminate\View\View;
class TestController extends Controller
{
    private $onesignal_client;
    public function __construct(){
        $this->onesignal_client=new OneSignalClient(env('ONESIGNAL_APP_ID'),env('ONESIGNAL_REST_API_KEY'),null,0);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function sendNotification(){
        //supabaseの設定、ユーザー登録、onesignalへのユーザー登録(loginメソッドでいけるかわからん)が必要
        $this->onesignal_client->sendNotificationToAll(
            "Some Message",
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );
        return redirect()->route('test.index');
    }
}
