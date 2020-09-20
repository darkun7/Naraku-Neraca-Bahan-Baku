@extends('layouts.main')

@section('title', "Profil")

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Profil</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Profil</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
              <div class="col-lg-9 col-xs-12">
      						<div class="panel panel-default card-view pa-0">
      							<div class="panel-wrapper collapse in">
      								<div  class="panel-body pb-0">
      									<div  class="tab-struct custom-tab-1">
      										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
      											<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Profil</span></a></li>
      											<li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Akun<span class="inline-block"> </span></span></a></li>
      										</ul>

      										<div class="tab-content" id="myTabContent_8">
      											<div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
                              <div class="row">
      													<div class="col-lg-12">
      														<div class="">
      															<div class="panel-wrapper collapse in">
      																<div class="panel-body pa-0">
      																	<div class="col-sm-12 col-xs-12">
      																		<div class="form-wrap">
      																			<form method="post" action="{{route('profilstore')}}">
                                              @csrf
      																				<div class="form-body overflow-hide">
      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputuname_01">Nama</label>
      																						<div class="input-group">

      																							<div class="input-group-addon"><i class="icon-user"></i></div>
      																							<input type="text" class="form-control" name="name" id="exampleInputuname_01" placeholder="Nama Lengkap" value="{{$user['name']}}" required>
      																						</div>
      																					</div>

      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputContact_01">Nomor Handphone</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-phone"></i></div>
      																							<input type="number" class="form-control" name="phone_number" id="exampleInputContact_01" placeholder="6281394626994" value="{{$user['phone_number']}}" required>
      																						</div>
      																					</div>

                                                <div class="form-group">
      																						<label class="control-label mb-10" for="alamat">Alamat</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-home"></i></div>
                                                    <textarea name="alamat" rows="4" cols="80" class="form-control" id="" required>{{$user['alamat']}}</textarea>
      																						</div>
      																					</div>
                                                <hr>
                                                <div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputpwd_02" required>Kata Sandi</label>
                                                  <p>Masukkan kata sandi untuk konfirmasi</p>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-lock"></i></div>
      																							<input type="password" class="form-control" id="exampleInputpwd_02" name="old_password" placeholder="Kata Sandi" value="" required>
      																						</div>
      																					</div>

      																				</div>
      																				<div class="form-actions mt-10">
      																					<button type="submit" class="btn btn-primary mr-10 mb-30">Perbarui Profil</button>
      																				</div>
      																			</form>
      																		</div>
      																	</div>
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      											</div>

      											<div  id="follo_8" class="tab-pane fade" role="tabpanel">
                              <div class="row">
      													<div class="col-lg-12">
      														<div class="">
      															<div class="panel-wrapper collapse in">
      																<div class="panel-body pa-0">
      																	<div class="col-sm-12 col-xs-12">
      																		<div class="form-wrap">
      																			<form method="post" action="{{route('profilstore')}}">
                                              @csrf
      																				<div class="form-body overflow-hide">
                                                <div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputEmail_01" required>Alamat Email</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
      																							<input type="email" class="form-control" id="exampleInputEmail_01" name="email" value="{{$user['email']}}" placeholder="xyz@gmail.com" required>
      																						</div>
      																					</div>
																						    <div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputpwd_01">Kata Sandi Baru</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-lock"></i></div>
      																							<input type="password" class="form-control" id="exampleInputpwd_01" name="password" placeholder="Kata Sandi Baru" value="" required>
      																						</div>
      																					</div>

                                                <div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputpwd_02">Kata Sandi Lama</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-lock"></i></div>
      																							<input type="password" class="form-control" id="exampleInputpwd_02" name="old_password" placeholder="Kata Sandi Lama" value="" required>
      																						</div>
      																					</div>
      																				</div>
      																				<div class="form-actions mt-10">
      																					<button type="submit" class="btn btn-primary mr-10 mb-30">Simpan</button>
      																				</div>
      																			</form>
      																		</div>
      																	</div>
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      											</div>

      												<!-- Row -->

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
