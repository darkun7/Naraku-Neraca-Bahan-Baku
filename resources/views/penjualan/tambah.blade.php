@extends('layouts.main')

@section('title', "Penjualan")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Penjualan</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li><a href="{{route('pupuk.index')}}">Penjualan</a></li>
          <li class="active"><span>Tambah</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Tambah Penjualan</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

													<form class="form-horizontal" method="POST" action="{{ route('penjualan.store') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Nama Pemesan</label>
															<div class="col-sm-9">
																	<input type="text" class="form-control" name="nama_pemesan" placeholder="Nama" required>
															</div>
														</div>
                            <div class="form-group">
															<label for="exampleInputweb_31" class="col-sm-3 control-label">Pupuk yang Dipesan</label>
															<div class="col-sm-9" id="area_entri">
                                <div class="col-sm-5">
                                  <label for="exampleInputweb_31" class="col-sm-3 control-label">Jenis</label>
                                  <select class="form-control" name="id_pupuk[]" required>
                                    <option value="null" disabled selected> Pilih jenis pupuk: </option>
                                    @foreach ($pupuk as $key => $value):
                                        <option value="{{$value['id']}}"> {{$value['nama']}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="col-sm-3">
                                  <label for="exampleInputweb_31" class="col-sm-3 control-label">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah[]" value="0" step="0.01" required>
                                </div>
                                <div class="col-sm-1">
                                  <a id="" class="btn btn-primary btn-sm entri_baru" href="javascript:void(0);"><i class="fa fa-plus"></i></a>
                                </div>
															</div>
														</div>
                            <!-- <div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label[]">Jenis Pupuk</label>
															<div class="col-sm-9">
                                  <select class="form-control" name="id_pupuk" required>
                                      <option value="null" disabled selected> Pilih Pupuk:</option>
                                      @foreach ($pupuk as $key => $value):
                                          <option value="{{$value['id']}}"> {{$value['nama']}}</option>
                                      @endforeach
                                  </select>
																	<input type="text" class="form-control mt-15" name="nama" placeholder="Jenis Bahan Baru" id="bahan-baru" style="display:none">
															</div>
														</div>
                            <div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Jumlah</label>
															<div class="col-sm-9">
																	<input type="number" class="form-control" name="jumlah[]" value="1" required>
															</div>
														</div> -->
                            <div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Alamat</label>
															<div class="col-sm-9">
																	<textarea name="alamat" class="form-control" rows="3" cols="80" required></textarea>
															</div>
														</div>
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-success ">Tambah</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
      <!-- /Row -->
@endsection

@section('js')
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
  var i = 1;
  $(".entri_baru").click(function(){
    i++;
    $("#area_entri").append(`
      <div id="entri`+i+`">
          <div class="col-sm-5 mt-15">
            <select class="form-control" name="id_pupuk[]" required>
              <option value="null" disabled selected> Pilih jenis pupuk: </option>
              @foreach ($pupuk as $key => $value):
                  <option value="{{$value['id']}}"> {{$value['nama']}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-sm-3 mt-15">
            <input type="number" class="form-control" name="jumlah[]" value="0" step="0.01" required>
          </div>
          <div class="col-sm-1 mt-15">
            <a id="`+i+`" class="btn btn-danger btn-sm hapus_entri" href="javascript:void(0);"><i class="fa fa-times"></i></a>
          </div>
      </div>


    `);
  });
});
$(document).on('click','.hapus_entri',function(){
  var id_field = $(this).attr("id");
  $("#entri"+id_field+"").remove()
});
</script>
@endsection
