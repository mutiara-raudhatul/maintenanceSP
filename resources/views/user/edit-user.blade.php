@extends('layout/template')

@section('title', 'Dashboard Admin Gudang')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Edit Data User</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Data User</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title">Data User</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputPlaceholder">Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Name" id="inputPlaceholder">
												</div>
											</div>
						
											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputPlaceholder">Nick Name</label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Nick Name" id="inputPlaceholder">
												</div>
											</div> -->
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="fc_inputmask_1">NIP</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
																<!-- <i class="fa fa-plus"></i> -->
														</span>
														<input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="9999" placeholder="__ __ __ __" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Role</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
														<option >Karyawan</option>
														<option>Teknisi</option>
														<option>Admin Teknisi</option>
													</select>
												</div>
											</div>

											<!-- <div class="form-group">
												<label class="col-md-3 control-label">Place and Date of Birth</label>
												<div class="col-md-6">
													<div class="input-group">
														<input type="text" class="form-control" name="start" placeholder="Place">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control" placeholder="Date of Birth">
													</div>
												</div>
											</div> -->

											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputPlaceholder">Address</label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Address" id="inputPlaceholder">
												</div>
											</div> -->
											
											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Job Title</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
														<option disabled selected hidden>Job Title</option>
														<option>Manager</option>
														<option>Teknisi</option>
													</select>
												</div>
											</div> -->

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Work Unit</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
														<option>Unit 1</option>
														<option>Unit 2</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Eselon</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
													</select>
												</div>
											</div>

											<!-- <div class="panel-body">
											<form class="form-horizontal form-bordered" action="#">
											<div class="form-group">
												<label class="col-md-3 control-label">Basic select</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate">
														<optgroup label="Eselon">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</optgroup>
													</select>
												</div>
											</div> -->

											<div class="form-group">
												<label class="col-md-3 control-label">Phone</label>
													<div class="col-md-6 control-label">
														<div class="input-group">
															<span class="input-group-addon">
																<!-- <i class="fa fa-phone"></i> -->
															</span>
															<input id="phone" data-plugin-masked-input data-input-mask="(+99) 999-9999-9999" placeholder="(+62) 123-1234-1234" class="form-control">
														</div>
													</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">E-Mail</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input class="form-control" type="text" placeholder="Email">
													</section>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Password</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input class="form-control last" type="password" placeholder="Password">
													</section>
												</div>
											</div>
						
											<!-- <div class="form-group">
												<label class="col-md-3 control-label">File Upload</label>
												<div class="col-md-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input" style="width:368px;">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" />
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
												</div>
											</div> -->

										</form>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-7">
												<button class="btn btn-primary">Edit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>

				</section>
@endsection
<!-- end: page -->
