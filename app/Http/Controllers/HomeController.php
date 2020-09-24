<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Simplex\Task;
use Simplex\Func;
use Simplex\Solver;
use Simplex\Table;
use Simplex\TableRow;
use Simplex\ValueFunc;
use Simplex\Restriction;

use Tester\Assert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $z;
    public $id_pupuk = [];
    public $bahan_produksi = []; #ID dari semua bahan yang diproduksi
    public $stok_per_bahan = []; #Jumlah stok tersedia berdasarkan $bahan_produksi
    public $constrain = []; #Persamaan untuk difungsikan kedalam simplex
    public $global_task = [];

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

        // $a = DB::table('pupuk')->select(DB::raw());
        // $unggulan = Pemesanan::sortBy(function ($sale) {
        //   return $sale->id_pupuk->count();
        // }, SORT_REGULAR, true)->take(1)->get();
        return view('dasbor.index', compact('pemesanan', 'allpemesanan', 'finishpesanan'));
    }

    public function kalkulator()
    {
        $pesanan = \App\Pemesanan::all();
        // $this->test();
        return view('dasbor.kalkulator', compact('pesanan'));
    }

    public function makeRestriction($id){
      $task = $this->global_task;

      foreach ($this->constrain as $i => $value) {
          $task->addRestriction(new Restriction( $value , Restriction::TYPE_LOE, $this->stok_per_bahan[$i]));
      }
      #
    }

    public function test(){
      $z = new Func(array(
      	'x1' => 1,
      	'x2' => 2,
      ));

      $task = new Task($z);

      $task->addRestriction(new Restriction(array(
      	'x1' => 3,
      	'x2' => 2,

      ), Restriction::TYPE_LOE, 24));

      $task->addRestriction(new Restriction(array(
      	'x1' => -2,
      	'x2' => -4,

      ), Restriction::TYPE_GOE, -32));


      $solver = new Solver($task);

      dd($solver);
    }

    public function hitung(Request $request)
    {
        $input = $request['order'];
        if(count($input) <2){
          return redirect()->route('kalkulator')->with('error', 'Pilih setidaknay 2 pesanan');
        }
        $harga_pupuk = [];
        foreach($input as $key => $order) {
            $pesanan = \App\Pemesanan::findOrFail($order);
            // dd($pesanan);
            // foreach ($pesanan->pupuk->get() as $key => $p) {
               #mendapatkan data harga setiap pupuk yang ada di order || memasukkan id_pupuk
               $harga_pupuk ['x'.($key+1)] = $pesanan->pupuk->harga;
               array_push($this->id_pupuk, $pesanan->id_pupuk);
               #mencatat bahan apa saja yang diperlukan untuk batch produksi
               #bahan dicatat secara unique
               $pupuk = $pesanan->pupuk;
               $komposisi = $pupuk->komposisis();
               foreach ($komposisi->get() as $key => $k) {
                   if(!in_array($k->id_bahan, $this->bahan_produksi, true)){
                       array_push($this->bahan_produksi, $k->id_bahan);
                   }
               }
            // }
        }
        #menyimpan stok setiap bahan yang akan diproduksi
        foreach ($this->bahan_produksi as $i) {
            $bahan = \App\Bahan::findOrFail($i);
            array_push($this->stok_per_bahan, $bahan->jumlah);
        }
        #
        // foreach ($this->bahan_produksi as $i => $bahan) {
            // code...
            foreach ($this->id_pupuk as $j => $value) {
                $pupuk = \App\Pupuk::findOrFail($value);
                $komposisi = $pupuk->komposisis();
                #loop push bahan ke array
                $bahan = [];
                $x = [];
                $rasio = [];
                // foreach ($this->bahan_produksi as $key =>$value) {
                //     array_push($x, 'x'.($key+1));
                //     foreach ($komposisi->get() as $k) {
                //         if( $k->id_bahan == $value ) {
                //           array_push($rasio, $k->rasio);
                //         }else{
                //           array_push($rasio, 0);
                //         }
                //     }
                // }
                foreach ($komposisi->get() as $key => $k) {
                    array_push($x, 'x'.($key+1));
                    foreach ($this->bahan_produksi as $value) {
                        if( in_array($k->id_bahan, $this->bahan_produksi, true) ) {
                          array_push($rasio, $k->rasio);
                        }else{
                          array_push($rasio, 0);
                        }
                    }
                }

                for ($i=0; $i < count($x); $i++) {
                  $bahan [$x[$i]] = $rasio[$i];
                }
                array_push($this->constrain, $bahan);
                // dd($this->constrain);
            }
        // }


        $this->z =new Func($harga_pupuk);
        $this->global_task = new Task($this->z);
        foreach ($this->id_pupuk as $i => $value) {
            $this->makeRestriction($value);
        }

        $solver = new Solver($this->global_task);
        $steps = $solver->getSteps();
        $pesanan = \App\Pemesanan::all();
        $result = end($steps);
        dd($result->solution);
        return view('dasbor.kalkulator', compact('pesanan'));
        // return redirect('/kalkulator#result')->with(compact('pesanan', 'steps'));
        // return redirect()->route('kalkulator')->with('result', $result);
    }
}
