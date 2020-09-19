<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()
    {
      // $web = \App\Setting::all();
      $web = \App\Setting::findOrFail(0);
      $pupuk = \App\Pupuk::all();
      return view('front.home',compact('web', 'pupuk'));
    }

    public function index()
    {
        return view('dasbor.index');
    }

    public function kalkulator()
    {
        return view('dasbor.kalkulator');
    }
}
