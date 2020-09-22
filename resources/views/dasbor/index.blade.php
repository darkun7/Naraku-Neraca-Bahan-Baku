@extends('layouts.main')

@section('title', "Dasbor")

@section('css')
<style media="screen">
  .bigText{
    font-size: 24px;
  }
</style>
@endsection

@section('content')
<div class="row heading-bg">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h5 class="txt-dark">Dasbor</h5>
  </div>
</div>
<div class="row">
  <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
    <div class="panel panel-default card-view">
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div class="table-wrap">
            <h6>Penjualan</h6>
            <div class="table-responsive">
              <table id="example" class="table table-hover display  pb-30" >
              <thead>
                <tr>
                  <th>Tanggal Pemesanan</th>
                  <th>Nama</th>
                  <th>Jenis Pupuk</th>
                  <th>Jumlah</th>
                  <th>Kontak</th>
                  <th>Alamat Pengiriman</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($pemesanan as $key => $value)
                <tr>
                  <td>{{$value['created_at']}}</td>
                  <td>{{$value['nama_pemesan']}}</td>
                  <?php $pupuk = \App\Pupuk::findOrFail($value['id_pupuk']);?>
                  <!-- <td>{{$pupuk->nama}}</td> -->
                  <td>{{$value->pupuk->nama}}</td>
                  <td>{{$value->jumlah}}</td>
                  <td>{{$value->kontak}}</td>
                  <td>{{$value->alamat}}</td>
                  <td>
                    <div class="dropdown">
                      <?php
                          switch ($value->status) {
                            case 'belum bayar':
                              $type = 'warning';
                              break;
                            case 'lunas':
                              $type = 'info';
                              break;
                            case 'selesai':
                              $type = 'success';
                              break;
                            case 'batal':
                              $type = 'danger';
                              break;
                          }
                       ?>
                      <button class="btn btn-{{$type}} dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$value->status}}
                      </button>
                    </div>
                  </td>
                  <!-- <td>
                    <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/bahan/{{$value['id']}}/edit"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/bahan/{{$value['id']}}/hapus" onclick="return confirm('Apakah yakin untuk menghapus?\n Data yang sudah dihapus tidak dapat dikembalikan')"><i class="fa fa-trash-o"></i></a>
                  </td> -->
                </tr>
                @endforeach
              </tbody>

              <tfoot>
                <tr>
                  <th>Tanggal Pemesanan</th>
                  <th>Nama</th>
                  <th>Jenis Pupuk</th>
                  <th>Jumlah</th>
                  <th>Kontak</th>
                  <th>Alamat Pengiriman</th>
                  <th>Status</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-5 col-sm-5 col-xs-12">


    <div class="panel panel-default card-view pt-0 bg-gradient">
      <div class="panel-wrapper collapse in">
        <div class="panel-body pa-0">
          <div class="sm-data-box bg-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 text-left pl-0 pr-0 data-wrap-left">
                  <span class="block"><span class="weight-500 uppercase-font txt-light font-13">Tanggal</span></span>
                  <span class="txt-light"><span class="bigText">{{date("d/m/Y")}}</span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default card-view pt-0 bg-gradient3">
      <div class="panel-wrapper collapse in">
        <div class="panel-body pa-0">
          <div class="sm-data-box bg-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 text-left pl-0 pr-0 data-wrap-left">
                  @role('produsen')
                  <span class="block"><span class="weight-500 uppercase-font txt-light font-13">Pesanan Bulan Ini</span><i class="zmdi zmdi-caret-up txt-success font-21 ml-5 vertical-align-middle"></i></span>
                  <span class="txt-light block counter"><span class="counter-anim">{{$allpemesanan}}</span> Produk</span>
                  @endrole
                  @role('pelanggan')
                  <span class="txt-light block counter"><span class="counter-anim">Pupuk</span></span>
                  <span class="block"><span class="weight-500 uppercase-font txt-light font-13">Produk Unggulan</span><i class="zmdi zmdi-caret-up txt-success font-21 ml-5 vertical-align-middle"></i></span>
                  @endrole
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default card-view">
      <div class="panel-wrapper collapse in">
        <div class="panel-body sm-data-box-1">
            <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Progres Pemenuhan Pesanan</span>
            <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
              <i class=" icon-handbag"></i>
            </div>
            <div class="progress-anim mt-20">
              <div class="progress">
                <?php if($allpemesanan < 1){$allpemesanan = 1;} ?>
                <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="{{$finishpesanan/$allpemesanan * 100}}" aria-valuemin="0" aria-valuemax="{{$allpemesanan}}"></div>
              </div>
            </div>
            <ul class="flex-stat mt-5">
              <li class="half-width">
                <span class="block">Total</span>
                <span class="block txt-dark weight-500 font-15">
                  <i class="zmdi zmdi-trending-up txt-success font-20 mr-10"></i>{{$allpemesanan}}
                </span>
              </li>
              <li class="half-width">
                <span class="block">Selesai</span>
                <span class="block txt-dark weight-500 font-15">{{$finishpesanan}}</span>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>

</div>


@endsection
