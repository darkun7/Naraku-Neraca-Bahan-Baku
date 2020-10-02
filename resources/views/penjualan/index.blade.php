@extends('layouts.main')

@section('title', "Penjualan")

@section('css')
<style media="screen">
  .dropdown-menu li{
    display: block;
    align-items: center;
    text-align: center;
    font-weight: bold;
  }
  .dropdown-menu .btn{
    width: 100%;
  }
</style>
@endsection

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Penjualan 30 Hari Terakhir</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Penjualan</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
                    <a href="{{ route('penjualan.create') }}" class="btn btn-success btn-icon-anim btn-sm mb-10"><i class="fa fa-plus"></i><span> Tambah</span></a>
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
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Ubah Status</li>
                                <a class="dropdown-item" href="/penjualan/{{$value['id']}}/set/belumbayar"><li><span class="btn btn-warning btn-icon-anim"> Belum bayar</span></li></a>
                                <a class="dropdown-item" href="/penjualan/{{$value['id']}}/set/lunas"><li><span class="btn btn-info btn-icon-anim"> Lunas</span></li></a>
                                <a class="dropdown-item" href="/penjualan/{{$value['id']}}/set/selesai"><li><span class="btn btn-success btn-icon-anim"> Selesai</span></li></a>
                                <a class="dropdown-item" href="/penjualan/{{$value['id']}}/set/batal"><li><span class="btn btn-danger btn-icon-anim"> Batal</span></li></a>
                                <a class="dropdown-item" href="/penjualan/{{$value['id']}}/hapus" style="color:white"><li><span class="btn btn-github btn-icon-anim"> Hapus</span></li></a>
                              </div>
                            </ul>
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
      </div>
      <!-- /Row -->
@endsection

@section('js')
<script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('main/js/export-table-data.js') }}"></script>
    @if($message = Session::get('message'))
    <script type="text/javascript">
    (function(a){
    document.body.appendChild(a);
    <?php $web = \App\Setting::find(0);
    ?>
    a.setAttribute('href', 'https://api.whatsapp.com/send?phone={{$web->nomor_wa}}&text={{$message}}');
    a.dispatchEvent((function(e){
        e.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, true, false, false, false, 0, null);
        return e
    }(document.createEvent('MouseEvents'))))}(document.createElement('a')))
    </script>
    @endif
@endsection
