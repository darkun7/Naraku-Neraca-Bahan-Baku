@extends('layouts.main')

@section('title', "Kalkulator")

@section('content')
  <h2>Kalkulator</h2>
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
  </div>
@endsection
