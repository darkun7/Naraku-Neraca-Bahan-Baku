@extends('layouts.main')

@section('title', "Kalkulator")

@section('content')
  <div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="txt-dark">Kalkulator</h4>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
      <li><a href="/">Dasbor</a></li>
      <li class="active"><span>Kalkulator</span></li>
      </ol>
    </div>
    <!-- /Breadcrumb -->
  </div>
  <div class="container-fluid">
  <div class="tab-content" id="myTabContent_8">
    <div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
      <div class="row">
          <div class="col-lg-8">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                  <div class="col-sm-12 col-xs-12">
                    <div class="form-wrap">
                      <form method="post" action="{{route('hitung')}}">
                        @csrf
                        <div class="form-body overflow-hide">
                          <div class="form-group">
                            <div class="col">
                              <p><h6>Pesanan yang dioptimasi</h6><br>Optimasi pesanan didasarkan dengan perhitungan <code>Linier Programming</code>. Adapun batasan agar sistem tetap teroptimasi dengan baik dengan membatasi sebanyak 3 produk pesanan yang dikerjakan secara paralel. </p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12" id="area_entri">
                              <div class="col-sm-8">
                                <label for="exampleInputweb_31" class="col-12 control-label">Pesanan yang dioptimasi</label>
                                <select class="form-control" name="order[]" required>
                                  <option value="null" disabled selected> Pilih pesanan: </option>
                                  @foreach ($pesanan as $key => $value):
                                      <option value="{{$value['id']}}"> {{$value['nama_pemesan']}} -- {{$value->pupuk->nama}} x {{$value['jumlah']}} buah</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="col-sm-1">
                                <a id="" class="btn btn-primary btn-sm entri_baru" href="javascript:void(0);"><i class="fa fa-plus"></i></a>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="form-actions mt-10">
                          <button type="submit" class="btn btn-primary mr-10 mb-30">Hitung</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                  <div class="col-sm-12 col-xs-12">
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

@section('js')
<script type="text/javascript">
var i = 1;
$(document).ready(function(){
  $(".entri_baru").click(function(){
    if(i<3){
      i++;
      console.log(i);
      $("#area_entri").append(`
        <div id="entri`+i+`">
            <div class="col-sm-8  mt-15">
              <select class="form-control" name="order[]" required>
                <option value="null" disabled selected> Pilih pesanan: </option>
                @foreach ($pesanan as $key => $value):
                    <option value="{{$value['id']}}"> {{$value['nama_pemesan']}} -- {{$value->pupuk->nama}} x {{$value['jumlah']}} buah</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-1 mt-15">
              <a id="`+i+`" class="btn btn-danger btn-sm hapus_entri" href="javascript:void(0);"><i class="fa fa-times"></i></a>
            </div>
        </div>
      `);
      }
  });
});


$(document).on('click','.hapus_entri',function(){
  var id_field = $(this).attr("id");
  $("#entri"+id_field+"").remove()
  i--;
  console.log(i);
});

</script>
@endsection
