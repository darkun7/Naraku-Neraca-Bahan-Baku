@extends('layouts.main')

@section('title', "Dasbor")

@section('content')
<div class="row">
  <div class="col-lg-3 col-md-5 col-sm-5 col-xs-12">
    <div class="panel panel-default card-view pt-0 bg-gradient">
      <div class="panel-wrapper collapse in">
        <div class="panel-body pa-0">
          <div class="sm-data-box bg-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-6 text-left pl-0 pr-0 data-wrap-left">
                  <span class="txt-light block counter">$<span class="counter-anim">15,678</span></span>
                  <span class="block"><span class="weight-500 uppercase-font txt-light font-13">growth</span><i class="zmdi zmdi-caret-down txt-danger font-21 ml-5 vertical-align-middle"></i></span>
                </div>
                <div class="col-xs-6 text-left  pl-0 pr-0 pt-25 data-wrap-right">
                  <div id="sparkline_4" class="sp-small-chart" ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default card-view pt-0 bg-gradient3">
      <div class="panel-wrapper collapse in">
        <div class="panel-body pa-0">
          <div class="sm-data-box bg-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-6 text-left pl-0 pr-0 data-wrap-left">
                  <span class="txt-light block counter"><span class="counter-anim">46.41</span>%</span>
                  <span class="block"><span class="weight-500 uppercase-font txt-light font-13">population</span><i class="zmdi zmdi-caret-up txt-success font-21 ml-5 vertical-align-middle"></i></span>
                </div>
                <div class="col-xs-6 text-left  pl-0 pr-0 pt-25 data-wrap-right">
                  <div id="sparkline_5" class="sp-small-chart" ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default card-view">
      <div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
          <span class="uppercase-font weight-500 font-14 block text-center txt-dark">project completed</span>
          <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
            <i class=" icon-handbag"></i>
          </div>
          <div class="progress-anim mt-20">
            <div class="progress">
              <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="40.13" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <ul class="flex-stat mt-5">
            <li class="half-width">
              <span class="block">joined shcool</span>
              <span class="block txt-dark weight-500 font-15">
                <i class="zmdi zmdi-trending-up txt-success font-20 mr-10"></i>52
              </span>
            </li>
            <li class="half-width">
              <span class="block">dropped</span>
              <span class="block txt-dark weight-500 font-15">+14.29</span>
            </li>
          </ul>
        </div>
                    </div>
                </div>
  </div>
  <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
    <div class="panel panel-default card-view panel-refresh relative">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Education Growth</h6>
        </div>
        <div class="pull-right">
          <a href="#" class="pull-left inline-block refresh mr-15">
            <i class="zmdi zmdi-replay"></i>
          </a>
          <div class="pull-left inline-block dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div id="e_chart_3" class="" style="height:356px;"></div>
          <div class="label-chatrs">
            <div class="inline-block mr-15">
              <span class="clabels inline-block bg-blue mr-5"></span>
              <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Higher education</span>
            </div>
            <div class="inline-block mr-15">
              <span class="clabels inline-block bg-pink mr-5"></span>
              <span class="clabels-text font-12 inline-block txt-dark capitalize-font">graduation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view panel-refresh relative">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Employment rate</h6>
        </div>
        <div class="pull-right">
          <a href="#" class="pull-left inline-block refresh mr-15">
            <i class="zmdi zmdi-replay"></i>
          </a>
          <div class="pull-left inline-block dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div id="e_chart_2" class="" style="height:376px;"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">

  <div class="col-lg-7 col-xs-12">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title">Traffic</h6>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper collapse in">
            <div class="panel-body">
              <div id="e_chart_4" class="" style="height:172px;"></div>
            </div>
          </div>
        </div>

        <div id="weather_3" class="panel panel-default card-view pa-0 weather-gradient2">
          <div class="panel-wrapper collapse in">
            <div class="panel-body pa-0">
              <div class="row ma-0">
                <div class="col-xs-6 pa-0">
                  <div class="left-block-wrap pa-30">
                    <p class="block nowday"></p>
                    <span class="block nowdate"></span>
                    <div class="left-block  mt-15"></div>
                  </div>
                </div>
                <div class="col-xs-6 pa-0">
                  <div class="right-block-wrap pa-30">
                    <div class="right-block"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view">
          <div class="panel-heading">
            <div class="pull-left">
              <h6 class="panel-title txt-dark">browser stats</h6>
            </div>
            <div class="pull-right">
              <a href="#" class="pull-left inline-block mr-15">
                <i class="zmdi zmdi-download"></i>
              </a>
              <a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
                <i class="zmdi zmdi-close"></i>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-wrapper collapse in">
            <div class="panel-body row">
                <div class="table-wrap sm-data-box-2">
                <div class="table-responsive">
                  <table  class="table  top-countries mb-0">
                    <tbody>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/01-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Aland</span>
                        </td>
                        <td class="text-right">
                          <span class="badge badge-warning transparent-badge weight-500">57%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/02-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Angola</span>
                        </td>
                        <td class="text-right">
                          <span class="badge badge-danger transparent-badge weight-500">17%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/03-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Anguilla</span>
                        </td>

                        <td class="text-right">
                          <span class="badge badge-info transparent-badge weight-500">27%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/04-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Bahrain</span>
                        </td>
                        <td class="text-right">
                          <span class="badge badge-danger transparent-badge weight-500">17%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/05-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Australia</span>
                        </td>
                        <td class="text-right">
                          <span class="badge badge-primary transparent-badge weight-500">51%</span>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/06-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Austria</span>
                        </td>

                        <td class="text-right">
                          <span class="badge badge-warning transparent-badge weight-500">10%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ asset('main/img/country/07-flag.png') }}" alt="country">
                          <span class="country-name txt-dark pl-15">Belgium</span>
                        </td>
                        <td class="text-right">
                          <span class="badge badge-success transparent-badge weight-500">27%</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="txt-dark">
                          Other
                        </td>

                        <td class="text-right">
                          <span class="badge badge-warning transparent-badge weight-500">10%</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-5 col-xs-12">
                <div id="weather_1" class="panel panel-default card-view">
      <div class="panel-heading">
        <div class="pull-left">
          <div class="dropdown inline-block">
            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default btn-outline dropdown-toggle border-none pa-0 font-16" type="button"><span></span><i class="zmdi  zmdi-chevron-down ml-15"></i></button>
            <ul class="dropdown-menu bullet dropdown-menu-left"  role="menu">
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Montreal</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Melbourne   </a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Mumbai</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Washington DC</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Tokyo   </a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Los Angeles </a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Singapore  </a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <h6 class="block nowday"></h6>
          <span class="block nowdate"></span>
          <div class="weather weatherapp mt-15"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Row -->

<!-- Row -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view panel-refresh">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Audience location</h6>
        </div>
        <div class="pull-right">
          <a href="#" class="pull-left inline-block refresh mr-15">
            <i class="zmdi zmdi-replay"></i>
          </a>
          <a href="#" class="pull-left inline-block full-screen mr-15">
            <i class="zmdi zmdi-fullscreen"></i>
          </a>
          <div class="pull-left inline-block dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-wrapper collapse in">
                        <div class="panel-body">
          <div id="world_map_marker_1" style="height: 385px"></div>
        </div>
      </div>
                </div>
            </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view panel-refresh">
      <div class="refresh-container">
        <div class="la-anim-1"></div>
      </div>
      <div class="panel-heading">
        <div class="pull-left">
          <h6 class="panel-title txt-dark">Gender Split</h6>
        </div>
        <div class="pull-right">
          <a href="#" class="pull-left inline-block refresh mr-15">
            <i class="zmdi zmdi-replay"></i>
          </a>
          <div class="pull-left inline-block dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
              <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div id="e_chart_5" class="" style="height:260px;"></div>
          <hr class="light-grey-hr row mt-10 mb-15"/>
          <div class="label-chatrs">
            <div class="">
              <span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
              <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-16 weight-500 mb-5"><span class="counter-anim">30</span>%</span><span class="block txt-grey">Male</span></span>
              <i class="big-rpsn-icon zmdi zmdi-male-alt pull-right txt-primary"></i>
              <div class="clearfix"></div>
            </div>
          </div>
          <hr class="light-grey-hr row mt-10 mb-15"/>
          <div class="label-chatrs">
            <div class="">
              <span class="clabels clabels-lg inline-block bg-pink mr-10 pull-left"></span>
              <span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-16 weight-500 mb-5"><span class="counter-anim">70</span>%</span><span class="block txt-grey">Female</span></span>
              <i class="big-rpsn-icon zmdi zmdi-female pull-right txt-info"></i>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
