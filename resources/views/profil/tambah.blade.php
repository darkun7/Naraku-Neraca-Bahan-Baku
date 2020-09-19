@extends('layouts.main')

@section('title', "Bahan Baku")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

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
          <li><a href="{{route('pupuk.index')}}">Bahan</a></li>
          <li class="active"><span>Tambah</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Tambah Bahan Baru</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

													<form class="form-horizontal" method="POST" action="{{ route('bahan.store') }}" autocomplete="off">
                            @csrf
														<div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Jenis Bahan</label>
															<div class="col-sm-9">
                                  <select class="form-control" name="bahan" id="select-bahan" required>
                                      <option value="null" disabled selected> Pilih Bahan</option>
                                      @foreach ($bahan as $key => $value):
                                          <option value="{{$value['id']}}"> {{$value['nama']}}</option>
                                      @endforeach
                                      <option value="bahan-baru">Jenis Bahan Baru</option>
                                  </select>
																	<input type="text" class="form-control mt-15" name="nama" placeholder="Jenis Bahan Baru" id="bahan-baru" style="display:none">
															</div>
														</div>
                            <div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Stok Bahan</label>
															<div class="col-sm-9">
																	<input type="number" class="form-control" name="stok" placeholder="Stok Bahan" required>
															</div>
														</div>
                            <div class="form-group">
                              <label for="exampleInputweb_31" class="col-sm-3 control-label">Satuan</label>
                              <div class="col-sm-9">
                                  <select class="form-control" name="satuan" required>
                                      <option value="null" disabled selected> Satuan:</option>
                                      <option value="kwintal"> Kwintal</option>
                                      <option value="kg"> Kilogram</option>
                                      <option value="g"> Gram</option>
                                      <option value="L"> Liter</option>
                                      <option value="mL"> Mililiter</option>
                                  </select>
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
  $('#select-bahan').on('change', function() {
    if(this.value == "bahan-baru") {
        $("#bahan-baru").show();
    } else {
       $("#bahan-baru").hide();
    }
  });
});
</script>

@endsection
