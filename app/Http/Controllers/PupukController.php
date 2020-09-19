<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pupuk;
use App\Bahan;
class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pupuk = Pupuk::all();
        return view('pupuk.index', compact('pupuk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahan = Bahan::all();
        return view('pupuk.tambah', compact('bahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request);
        // return redirect()->route('bahan.create')->with('error', 'Harap melengkapi form isian');
        if ($request->hasFile('gambar')) {
            $uploadFile = $request->file('gambar');
            $destinationPath = 'uploads/pupuk/';// upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_pupuk.".$uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }else{
            $fileName = 'assets/images/tumbnail_pupuk.png';
        }
        $input = $request->all();
        $pupuk = \App\Pupuk::create([
          'nama'      => $input['nama'],
          'deskripsi' => $input['deskripsi'],
          'harga'     => $input['harga'],
          'gambar'    => $fileName
        ]);
        foreach ($input['rasio'] as $key => $value) {
          $komposisi = \App\Komposisi::create([
            'id_pupuk' => $pupuk->id,
            'id_bahan' => $input['id_bahan'][$key],
            'rasio' => $input['rasio'][$key]
          ]);
        }
        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil ditambahkan');
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
        $pupuk = Pupuk::findOrFail($id);
        $bahan = Bahan::all();
        return view('pupuk.edit', compact('bahan', 'pupuk'));
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
        if ($request->hasFile('gambar')) {
            $uploadFile = $request->file('gambar');
            $destinationPath = 'uploads/pupuk/';// upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_pupuk.".$uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }else{
            $fileName = 'assets/images/tumbnail_pupuk.png';
        }
        $input = $request->all();
        $pupuk = \App\Pupuk::where('id',$id)->first();
        $pupuk->update([
          'nama'      => $input['nama'],
          'deskripsi' => $input['deskripsi'],
          'harga'     => $input['harga'],
          'gambar'    => $fileName
        ]);

        $komposisi = $pupuk->komposisis()->get();
        foreach ($komposisi as $key => $value) {
          $obj = \App\Komposisi::findOrFail($value['id']);
          $obj->delete();
        }


        foreach ($input['rasio'] as $key => $value) {
          $komposisi = \App\Komposisi::create([
            'id_pupuk' => $id,
            'id_bahan' => $input['id_bahan'][$key],
            'rasio' => $input['rasio'][$key]
          ]);
        }
        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $bahan = \App\Pupuk::find($id);
       if($bahan->get()->isEmpty()){
           redirect()->route('pupuk.index')->with('error', 'Gagal menghapus pupuk/ pupuk tidak ditemukan.');
       }
       $bahan->delete();
       return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil dihapus');
     }
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function arsip()
     {
         $pupuk = DB::table('pupuk')->whereNotNull('deleted_at')->get();
         return view('pupuk.arsip', compact('pupuk'));
     }
     public function revert($id)
     {
       $pupuk = DB::table('pupuk')->where('id',$id);
       if($pupuk->get()->isEmpty()){
           redirect()->route('pupuk.index')->with('error', 'Gagal mengembalikan pupuk/ arsip pupuk tidak ditemukan.');
       }
       $pupuk->update([
         'deleted_at'    => null
       ]);
       return redirect()->route('pupuk.arsip')->with('success', 'Pupuk berhasil dikembalikan ke daftar produk');
     }
}
