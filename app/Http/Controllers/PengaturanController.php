<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function website()
    {
        $web = \App\Setting::findOrFail(0);
        return view('setting.website',compact('web'));
    }

    public function jumbotron()
    {
        $web = \App\Setting::findOrFail(0);
        return view('setting.jumbotron',compact('web'));
    }

    public function kontak()
    {
        $web = \App\Setting::findOrFail(0);
        return view('setting.kontak',compact('web'));
    }

    public function maps()
    {
        $web = \App\Setting::findOrFail(0);
        return view('setting.maps',compact('web'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $pupuk = \App\Setting::findOrFail(0);
        $pupuk->update($input);
        return redirect()->route('home')->with('success', 'Pengaturan website berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
