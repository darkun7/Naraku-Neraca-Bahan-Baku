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
      											<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>profile</span></a></li>
      											<li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>followers<span class="inline-block">(246)</span></span></a></li>
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
      																			<form action="#">
      																				<div class="form-body overflow-hide">
      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputuname_01">Name</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-user"></i></div>
      																							<input type="text" class="form-control" id="exampleInputuname_01" placeholder="willard bryant">
      																						</div>
      																					</div>
      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputEmail_01">Email address</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
      																							<input type="email" class="form-control" id="exampleInputEmail_01" placeholder="xyz@gmail.com">
      																						</div>
      																					</div>
      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-phone"></i></div>
      																							<input type="email" class="form-control" id="exampleInputContact_01" placeholder="+102 9388333">
      																						</div>
      																					</div>
      																					<div class="form-group">
      																						<label class="control-label mb-10" for="exampleInputpwd_01">Password</label>
      																						<div class="input-group">
      																							<div class="input-group-addon"><i class="icon-lock"></i></div>
      																							<input type="password" class="form-control" id="exampleInputpwd_01" placeholder="Enter pwd" value="password">
      																						</div>
      																					</div>
      																					<div class="form-group">
      																						<label class="control-label mb-10">Gender</label>
      																						<div>
      																							<div class="radio">
      																								<input type="radio" name="radio1" id="radio_01" value="option1" checked="">
      																								<label for="radio_01">
      																								M
      																								</label>
      																							</div>
      																							<div class="radio">
      																								<input type="radio" name="radio1" id="radio_02" value="option2">
      																								<label for="radio_02">
      																								F
      																								</label>
      																							</div>
      																						</div>
      																					</div>
      																					<div class="form-group">
      																						<label class="control-label mb-10">Country</label>
      																						<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
      																							<option value="Category 1">USA</option>
      																							<option value="Category 2">Austrailia</option>
      																							<option value="Category 3">India</option>
      																							<option value="Category 4">UK</option>
      																						</select>
      																					</div>
      																				</div>
      																				<div class="form-actions mt-10">
      																					<button type="submit" class="btn btn-primary mr-10 mb-30">Update profile</button>
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
      														<div class="followers-wrap">
      															<ul class="followers-list-wrap">
      																<li class="follow-list">
      																	<div class="follo-body">
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Clay Masse</span>
      																				<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
      																			</div>
      																			<button class="btn btn-primary pull-right btn-xs fixed-btn">Follow</button>
      																			<div class="clearfix"></div>
      																		</div>
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Evie Ono</span>
      																				<span class="time block truncate txt-grey">Unity is strength</span>
      																			</div>
      																			<button class="btn btn-primary btn-outline pull-right btn-xs fixed-btn">following</button>
      																			<div class="clearfix"></div>
      																		</div>
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Madalyn Rascon</span>
      																				<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
      																			</div>
      																			<button class="btn btn-primary btn-outline pull-right btn-xs fixed-btn">following</button>
      																			<div class="clearfix"></div>
      																		</div>
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Mitsuko Heid</span>
      																				<span class="time block truncate txt-grey">I’m thankful.</span>
      																			</div>
      																			<button class="btn btn-primary pull-right btn-xs fixed-btn">Follow</button>
      																			<div class="clearfix"></div>
      																		</div>
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Ezequiel Merideth</span>
      																				<span class="time block truncate txt-grey">Patience is bitter.</span>
      																			</div>
      																			<button class="btn btn-primary pull-right btn-xs fixed-btn">Follow</button>
      																			<div class="clearfix"></div>
      																		</div>
      																		<div class="follo-data">
      																			<img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
      																			<div class="user-data">
      																				<span class="name block capitalize-font">Jonnie Metoyer</span>
      																				<span class="time block truncate txt-grey">Genius is eternal patience.</span>
      																			</div>
      																			<button class="btn btn-primary btn-outline pull-right btn-xs fixed-btn">following</button>
      																			<div class="clearfix"></div>
      																		</div>
      																	</div>
      																</li>
      															</ul>
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
