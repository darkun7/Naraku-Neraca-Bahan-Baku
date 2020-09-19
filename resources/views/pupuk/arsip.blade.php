@extends('layouts.main')

@section('title', "Pupuk")

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Produk</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Arsip Produk</span></li>
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
                    <a href="{{ route('pupuk.create') }}" class="btn btn-success btn-icon-anim btn-sm mb-10"><i class="fa fa-plus"></i><span> Tambah</span></a>
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
                      <thead>
                        <tr>
                          <th>Jenis Pupuk</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($pupuk as $key => $value)
                        <tr>
                          <td>{{$value->nama}}</td>
                          <td>Rp {{number_format($value->harga,0,",",".")}}</td>
                          <td>{{$value->jumlah}}</td>
                          <td><img src="{{asset($value->gambar)}}" alt="{{$value->nama}}" style="height:90px;"> </td>
                          <td>
                            <!-- <a class="btn btn-primary btn-icon-anim btn-square btn-sm"><i class="fa fa-info"></i></a> -->
                            <a class="btn btn-info btn-icon-anim btn-square btn-sm" href="/pupuk/{{$value->id}}/revert" onclick="return confirm('Apakah yakin untuk mengembalikan data?')"><i class="fa fa-refresh"></i></a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>

                      <tfoot>
                        <tr>
                          <th>Jenis Pupuk</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Gambar</th>
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
@endsection
