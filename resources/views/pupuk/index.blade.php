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
          <li class="active"><span>Produk</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      @role('produsen')
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
                          <td>{{$value['nama']}}</td>
                          <td>Rp {{number_format($value['harga'],0,",",".")}}</td>
                          <td>{{$value['jumlah']}}</td>
                          <td><img src="{{asset($value['gambar'])}}" alt="{{$value['name']}}" style="height:90px;"> </td>
                          <td>
                            <a class="btn btn-primary btn-icon-anim btn-square btn-sm"  href="/pupuk/{{$value['id']}}"><i class="fa fa-info"></i></a>
                            <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/pupuk/{{$value['id']}}/edit"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/pupuk/{{$value['id']}}/hapus" onclick="return confirm('Apakah yakin untuk menghapus?\n Pupuk yang dihapus akan dipindah pada menu `Pupuk Diarsipkan`')"><i class="fa fa-trash-o"></i></a>
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
      @endrole
      @role('pelanggan')
      <!-- Row -->
      <div class="row">
        @foreach ($pupuk as $key => $value)
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default contact-card card-view">
            <div class="panel-heading bg-gradient1">
              <div class="pull-left">
                <div class="pull-left user-img-wrap mr-15">
                  <img class="card-user-img img-circle pull-left" src="{{asset($value['gambar'])}}" alt="user">
                </div>
                <div class="pull-left user-detail-wrap">
                  <span class="block card-user-name">
                    {{$value['nama']}}
                  </span>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body row">
                <div class="user-others-details pl-15 pr-15">
                  <div class="mb-15">
                    <span class="inline-block capitalize-font mr-5">Deskripsi:</span>
                    <span class="inline-block txt-dark">{{$value['deskripsi']}}</span>
                  </div>
                  <div class="mb-15">
                    <span class="inline-block capitalize-font mr-5">Tersedia:</span>
                    <span class="inline-block txt-dark">{{$value['jumlah']}}</span>
                  </div>
                </div>
                <hr class="light-grey-hr mt-20 mb-20">
                <div class="emp-detail pl-15 pr-15">
                  <div class="mb-5">
                    <span class="inline-block capitalize-font mr-5">Harga:</span>
                    <span class="txt-dark"><h5>Rp {{number_format($value['harga'],0,",",".")}}</h5></span>
                  </div>
                  <a class="btn btn-success btn-icon-anim btn-sm btn-block"  href="/pupuk/{{$value['id']}}"><i class="fa fa-info"></i> Informasi Pupuk</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endrole('pelanggan')
@endsection

@section('js')
  @role('produsen')
    <script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('main/js/export-table-data.js') }}"></script>
  @endrole
@endsection
