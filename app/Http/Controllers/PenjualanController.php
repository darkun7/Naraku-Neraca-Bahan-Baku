<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = \App\Pemesanan::all();
        return view('penjualan.index',compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pupuk = \App\Pupuk::all();
        return view('penjualan.tambah', compact('pupuk'));
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
        foreach ($input['jumlah'] as $key => $value) {
          $pesanan = \App\Pemesanan::create([
            'nama_pemesan' => $input['nama_pemesan'],
            'id_pupuk' => $input['id_pupuk'][$key],
            'jumlah' => $input['jumlah'][$key],
            'alamat' => $input['alamat'],
            'kontak' => $input['kontak']
          ]);
        }
        if(Auth::user()->level == 'admin'){
          return redirect()->route('penjualan.index')->with('success', 'Pesanan berhasil ditambahkan');
        }else{
          return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambahkan');
        }

    }

    public function setstatus($id, $status){
        $pesanan = \App\Pemesanan::findOrFail($id);
        if( $status == "belumbayar"){
            $status = 'belum bayar';
        }
        $pesanan->update([
          'status'      => $status
        ]);
        return redirect()->route('penjualan.index')->with('success', 'Status pesanan berhasil diperbarui');
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
        $pesanan = \App\Pemesanan::find($id);
        if($pesanan->get()->isEmpty()){
            redirect()->route('pupuk.index')->with('error', 'Gagal menghapus pesanan/ pesanan tidak ditemukan.');
        }
        $pesanan->delete();
        return redirect()->route('pupuk.index')->with('success', 'Pesanan berhasil dihapus');
    }
}
