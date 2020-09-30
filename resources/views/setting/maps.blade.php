@extends('layouts.main')

@section('title', "Pengaturan")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('main/vendors/bower_components/summernote/dist/summernote.css') }}" />
@endsection

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Pengaturan</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li><a href="/">Pengaturan</a></li>
          <li class="active"><span>Kontak</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Detail Usaha</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

													<form class="form-horizontal" method="POST" action="{{ route('pengaturan.store') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputweb_31" class="col-sm-3 control-label">Link Google Maps</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" name="maps" placeholder="Contoh: https://maps.google.com/maps?hl=en&amp;q=-8.0457162,113.8261433" value="{{$web['maps']}}" required>
                                  <ol>
                                    <li>Buka website <a target="_blank" href="https://googlemapsembed.net/">https://googlemapsembed.net/</a> </li>
                                    <li>Tandai tempat usaha Karya Tani 2</li>
                                    <li>Tekan Get-HTML Code, dan akan ditampilkan kode yang cukup panjang. Namun anda hanya cukup untuk menyalin teks didalam tanda petik src=""
                                     </li>
                                    <li>Seperti gambar berikut: <img src="{{asset('assets/images/sample-maps.png')}}" alt="" style=""> </li>
                                  </ol>

                              </div>
                            </div>
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-success ">Simpan</button>
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
<script src="{{ asset('main/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('main/js/summernote-data.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>


@endsection
