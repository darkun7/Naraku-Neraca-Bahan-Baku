@extends('layouts.main')

@section('title', "Pemesanana")

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
          <h5 class="txt-dark">Pemesanan</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Sedang Dipesan</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      @if($message = Session::get('success'))
      <div id="waModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="waModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h5 class="modal-title">Lanjutkan ke Whatsaap</h5>
            </div>
            <?php $web = \App\Setting::find(0);
            ?>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <p>Konfirmasi pesanan anda dengan menghubungi melalui kontak whatsapp pengelola.</p>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="control-label mb-10" disabled>Penerima:</label>
                  <input type="text" class="form-control" id="recipient-name" value="{{$web->nomor_wa}}">
                </div>
                <!-- <div class="form-group">
                  <label for="message-text" class="control-label mb-10">Pesan:</label>
                  <textarea class="form-control" id="message-text" disabled>{{$message}}</textarea>
                </div> -->
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a target="_blank" href="https://api.whatsapp.com/send?phone={{$web->nomor_wa}}&text={{$message}}" class="btn btn-success"><i class="fa fa-whatsapp"></i> Lanjutkan</a>
            </div>
          </div>
        </div>
      </div>
      @endif


      <!-- Row -->
      <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
                    <a href="{{ route('pupuk.index') }}" class="btn btn-success btn-icon-anim btn-sm mb-10"><i class="fa fa-plus"></i><span> Tambah</span></a>
										<div class="table-responsive">
                      <table id="example" class="table table-hover display  pb-30" >
                      <thead>
                        <tr>
                          <th>Tanggal Pemesanan</th>
                          <th>Jenis Pupuk</th>
                          <th>Jumlah</th>
                          <th>Alamat Pengiriman</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($pemesanan as $key => $value)
                        @if($value->status == 'batal')
                        @else
                        <tr>
                          <td>{{$value['created_at']}}</td>
                          <td>{{$value->pupuk->nama}}</td>
                          <td>{{$value->jumlah}}</td>
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
                          </td>
                          <td>
                            @if ($value->status == "belum bayar")
                            <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/penjualan/{{$value['id']}}/set/batal" onclick="return confirm('Apakah yakin untuk membatalkan pesanan?\n Pesanan yang sudah dihapus tidak dapat dikembalikan')"><i class="fa fa-times"></i></a>
                            @else
                            <a class="btn btn-success btn-icon-anim btn-square btn-sm"><i class="fa fa-check"></i></a>
                            @endif
                          </td>
                          <!-- <td>
                            <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/bahan/{{$value['id']}}/edit"><i class="fa fa-pencil"></i></a>

                          </td> -->
                        </tr>
                        @endif
                        @endforeach
                      </tbody>

                      <tfoot>
                        <tr>
                          <th>Tanggal Pemesanan</th>
                          <th>Jenis Pupuk</th>
                          <th>Jumlah</th>
                          <th>Alamat Pengiriman</th>
                          <th>Status</th>
                          <th>Aksi</th>
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

    <script type="text/javascript">
    $(window).on('load',function(){
            $('#waModal').modal('show');
        });
    </script>

    @if($message = Session::get('success'))

    <!-- <script type="text/javascript">
    (function(a){
    document.body.appendChild(a);
    <?php #$web = \App\Setting::find(0);
    ?>
    a.setAttribute('href', 'https://api.whatsapp.com/send?phone={{$web->nomor_wa}}&text={{$message}}');
    a.dispatchEvent((function(e){
        e.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, true, false, false, false, 0, null);
        return e
    }(document.createEvent('MouseEvents'))))}(document.createElement('a')))
    </script> -->
    @endif
@endsection
