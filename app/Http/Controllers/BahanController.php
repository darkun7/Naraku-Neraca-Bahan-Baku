<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan = \App\Bahan::all();
        return view('bahan.index', compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahan = \App\Bahan::all();
        return view('bahan.tambah', compact('bahan'));
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
      if(!isset($input['bahan'])){
        return redirect()->route('bahan.create')->with('error', 'Harap melengkapi form isian');
      }
      if( isset($input['bahan']) && $input['bahan']=="bahan-baru" ){
        DB::table('Bahan')->insert([
          'nama'   => $input['nama'],
          'jumlah' => $input['stok'],
          'satuan' => $input['satuan']
        ]);
        $state = 'ditambahkan';
      }else{
        $r = DB::table('bahan')->where('id', $input['bahan'])
          ->update([
            'jumlah' => $input['stok'],
            'satuan' => $input['satuan']
        ]);
        $state = 'diperbarui';
      }
      return redirect()->route('bahan.index')->with('success', 'Bahan berhasil '.$state);
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
      $bahan = \App\Bahan::find($id);
      if($bahan->get()->isEmpty()){
          redirect()->route('bahan.index')->with('error', 'Gagal menghapus bahan/ bahan tidak ditemukan.');
      }
      $bahan->delete();
      return redirect()->route('bahan.index')->with('success', 'Bahan berhasil dihapus');
    }
}
