<?php

namespace App\Http\Controllers;

use App\Models\settings;
use App\Http\Requests\StoresettingsRequest;
use App\Http\Requests\UpdatesettingsRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings',['data' => settings::latest()->first()]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesettingsRequest  $request
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesettingsRequest $request)
    {
        $setting = settings::latest()->first();
        $setting->return_days = $request->return_days;
        $setting->fine = $request->fine;
        $setting->save();
        return redirect()->route('settings');
    }
}
