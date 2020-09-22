<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
    public function tentang()
    {
      // $web = \App\Setting::all();
      $web = \App\Setting::findOrFail(0);
      return view('front.tentang',compact('web'));
    }

    public function index()
    {
        $pemesanan = \App\Pemesanan::all();
        // $pemesanan = \App\Pemesanan::findOrFail(1);
        // $data = $pemesanan->pupuk()->first();
        #$pemesanan     = Pemesanan::whereDate('created_at', '>', Carbon::today()->subDays(30)->toDateString())->get();
        $f_pemesanan   = Pemesanan::where('status', '=', 'selesai')->whereDate('created_at', '>', Carbon::today()->subDays(30)->toDateString())->get();
        $allpemesanan  = count($pemesanan);
        $finishpesanan = count($f_pemesanan);

        // $unggulan = Pemesanan::sortBy(function ($sale) {
        //   return $sale->id_pupuk->count();
        // }, SORT_REGULAR, true)->take(1)->get();
        return view('dasbor.index', compact('pemesanan', 'allpemesanan', 'finishpesanan'));
    }

    public function kalkulator()
    {
        return view('dasbor.kalkulator');
    }
}
