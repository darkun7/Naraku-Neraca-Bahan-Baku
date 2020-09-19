@extends('layouts.main')

@section('title', "Pupuk")

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
          <li><a href="{{route('pupuk.index')}}">produk</a></li>
          <li class="active"><span>Sunting</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Ubah Pupuk</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

													<form class="form-horizontal" method="POST" action="/pupuk/{{$pupuk['id']}}/edit" enctype="multipart/form-data" autocomplete="off">
                            @csrf
														<div class="form-group">
															<label for="exampleInputuname_3" class="col-sm-3 control-label">Jenis Pupuk</label>
															<div class="col-sm-9">
																	<input type="text" class="form-control" name="nama" placeholder="Jenis Pupuk" value="{{$pupuk['nama']}}" required>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputEmail_3" class="col-sm-3 control-label">Deskripsi</label>
															<div class="col-sm-9">
                                  <textarea class="form-control" name="deskripsi" rows="4" cols="80" required>{{$pupuk['deskripsi']}}</textarea>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputweb_31" class="col-sm-3 control-label">Harga Jual</label>
															<div class="col-sm-9">
																	<input type="number" class="form-control" name="harga" value="{{$pupuk['harga']}}" placeholder="Contoh: 25000" required>
															</div>
														</div>
                            <div class="form-group">
															<label for="exampleInputweb_31" class="col-sm-3 control-label">Komposisi</label>
															<div class="col-sm-9" id="area_entri">
                                <?php $jml_komposisi = count($pupuk->komposisis()->get()); ?>
                                @foreach ($pupuk->komposisis()->get() as $i => $komposisi)
                                <div id="entri{{$i}}">
                                    <div class="col-sm-5 mt-15">
                                      <select class="form-control" name="id_bahan[]" required>
                                      <option value="null" disabled> Pilih bahan baku: </option>
                                      @foreach ($bahan as $key => $value)
                                          <option value="{{$value['id']}}" @if( $komposisi['id_bahan'] == $value['id'] ) selected @endif> {{$value['nama']}}</option>
                                      @endforeach
                                      </select>
                                    </div>
                                    <div class="col-sm-3 mt-15">
                                      <input type="number" class="form-control" name="rasio[]" value="{{$komposisi['rasio']}}" step="0.01" required>
                                    </div>
                                    <div class="col-sm-2 mt-15">
                                      <select class="form-control" name="satuan[]" required>
                                          <option value="null" disabled selected> satuan</option>
                                          <option value="kwintal"> Kwintal</option>
                                          <option value="kg"> Kilogram</option>
                                          <option value="g"> Gram</option>
                                          <option value="L"> Liter</option>
                                          <option value="mL"> Mililiter</option>
                                      </select>
                                    </div>

                                    @if($i != 0)
                                    <div class="col-sm-1 mt-15">
                                      <a id="{{$i}}" class="btn btn-danger btn-sm hapus_entri" href="javascript:void(0);"><i class="fa fa-times"></i></a>
                                    </div>
                                    @else
                                    <div class="col-sm-1">
                                      <a id="" class="btn btn-primary btn-sm entri_baru" href="javascript:void(0);"><i class="fa fa-plus"></i></a>
                                    </div>
                                    @endif

                                </div>
                                @endforeach

															</div>
														</div>
                            <div class="form-group">
															<label for="exampleInputpwd_4" class="col-sm-3 control-label">Gambar Pupuk</label>
															<div class="col-sm-9">
                                  <div class="mt-40">
                											<input type="file" id="input-file-max-fs" name="gambar" class="dropify" data-max-file-size="2M" data-default-file="{{asset($pupuk['gambar'])}}"/>
                									</div>
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
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
  var i = {{$jml_komposisi+1}};
  $(".entri_baru").click(function(){
    i++;
    $("#area_entri").append(`
      <div id="entri`+i+`">
          <div class="col-sm-5 mt-15">
            <select class="form-control" name="id_bahan[]" required>
            <option value="null" disabled selected> Pilih bahan baku: </option>
            @foreach ($bahan as $key => $value):
                <option value="{{$value['id']}}"> {{$value['nama']}}</option>
            @endforeach
            </select>
          </div>
          <div class="col-sm-3 mt-15">
            <input type="number" class="form-control" name="rasio[]" value="0" step="0.01" required>
          </div>
          <div class="col-sm-2 mt-15">
            <select class="form-control" name="satuan[]" required>
                <option value="null" disabled selected> satuan</option>
                <option value="kwintal"> Kwintal</option>
                <option value="kg"> Kilogram</option>
                <option value="g"> Gram</option>
                <option value="L"> Liter</option>
                <option value="mL"> Mililiter</option>
            </select>
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
