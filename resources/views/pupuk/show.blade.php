@extends('layouts.main')

@section('title', "Pupuk")

@section('css')
<style media="screen">
  .profile-box{
    background-color: white;
  }
  /* .profile-image-overlay{
    background: rgb(39,174,96) !important;
    background: linear-gradient(180deg, rgba(39,174,96,1) 0%, rgba(39,174,96,1) 40%, rgba(255,252,159,1) 100%) !important;
  } */
</style>
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
          <li class="active"><span>{{$pupuk['nama']}}</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="profile-box">
				<div class="profile-cover-pic">
					<div class="profile-image-overlay panel-heading bg-gradient1"></div>
				</div>
				<div class="profile-info text-center">
					<div class="profile-img-wrap">
						<img class="inline-block mb-10" src="{{asset($pupuk['gambar'])}}" alt="{{asset($pupuk['nama'])}}"/>
					</div>
					<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-warning">{{$pupuk['nama']}}</h5>
					<h6 class="block capitalize-font pb-20 txt-dark">Rp {{number_format($pupuk['harga'],0,",",".")}}</h6>
				</div>
				<div class="">
          <hr>
					<div class="row">
						<div class="col-xs-6 text-center">
							<h4><span class="counts block head-font txt-dark"><span class="counter-anim">{{$pupuk['jumlah']}}</span></span></h4>
							<span class="counts-text block txt-dark">Stok</span>
						</div>
						<div class="col-xs-6 text-center">
							<h4><span class="counts block head-font txt-dark"><span class="counter-anim">3</span> Minggu</span></h4>
							<span class="counts-text block txt-dark">Estimasi Produksi</span>
						</div>
					</div>
          <div class="row">
            <div class="col-xs-12 text-center">
              <hr>
              <span class="head-font txt-dark">{{$pupuk['deskripsi']}}</span>
            </div>
          </div>
					<button class="btn btn-success btn-block btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-basket"></i><span class="btn-text">Pesan Sekarang</span></button>
					<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h5 class="modal-title" id="myModalLabel">Buat Pesanan</h5>
								</div>
								<div class="modal-body">
									<!-- Row -->
									<div class="row">
										<div class="col-lg-12">
											<div class="">
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="col-sm-12 col-xs-12">
															<div class="form-wrap">
															<form class="form-horizontal" method="POST" action="{{ route('penjualan.store') }}" autocomplete="off">
                                  @csrf
																	<div class="form-body">
																		<input type="text" class="form-control" name="nama_pemesan" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}" style="display:none">
                                    <div class="form-group">
																			<label class="control-label mb-10" >Jenis Pupuk</label>
                                      <input type="text" class="form-control" name="id_pupuk[]" value="{{$pupuk['id']}}" style="display:none">
																				<input type="text" class="form-control" value="{{$pupuk['nama']}}" disabled>
																		</div>
                                    <div class="form-group">
																			<label class="control-label mb-10" >Jumlah</label>
																			<input type="number" class="form-control" name="jumlah[]" value="1">
                                    </div>
                                    <div class="form-group">
																			<label class="control-label mb-10" >Kontak Whatsapp</label>
																				<input type="number" class="form-control" name="kontak" value="{{Auth::user()->phone_number}}" placeholder="1">
																		</div>
                                    <div class="form-group">
        															<label class="control-label mb-10" >Alamat Pengiriman</label>
        															<textarea name="alamat" class="form-control" rows="3" cols="80" required>{{Auth::user()->alamat}}</textarea>
        														</div>
																	</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary waves-effect" >Pesan</button>
									<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                  </form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
			</div>

      <!-- /Row -->
@endsection

@section('js')

@endsection
