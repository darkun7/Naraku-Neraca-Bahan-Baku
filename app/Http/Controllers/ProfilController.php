<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  Auth::user()->id;
        $user = \App\User::where('id', $id)->first();
        return view('profil.index',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $id =  Auth::user()->id;
        $user = \App\User::where('id', $id)->first();
        $oldpass = $input['old_password'];
        if(Hash::check($oldpass, $user->password)){
          unset( $input['old_password'] );
          if(isset($input['password'])){
            $input['password'] = Hash::make($input['password']);
          }
          $user->update($input);
          return redirect()->route('profil')->with('success', 'Profil berhasil disimpan');
        }else{
          return redirect()->route('profil')->with('error', 'Kata Sandi konfirmasi tidak sesuai');
        }
    }
}
