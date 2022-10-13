@extends('layout/template')

@section('title', 'Dashboard Admin Gudang')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Registrasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Registrasi</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title">Registrasi</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="/registrasi" method="post">
											@csrf
											<div class="form-group">
												<label class="col-md-3 control-label" for="name">Name</label>
												<div class="col-md-6">
													<input  type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="fc_inputmask_1">NIP</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
																<!-- <i class="fa fa-plus"></i> -->
														</span>
														<input required type="number" id="fc_inputmask_1" data-plugin-masked-input data-input-mask="9999" placeholder="__ __ __ __" class="form-control @error('email') is-invalid @enderror">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Role</label>
												<div class="col-md-6">
													<select required class="form-control mb-md">
														<option >Karyawan</option>
														<option>Teknisi</option>
														<option>Admin Teknisi</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Work Unit</label>
												<div class="col-md-6">
													<select required class="form-control mb-md">
														<option>Unit 1</option>
														<option>Unit 2</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Eselon</label>
												<div class="col-md-6">
													<select  required class="form-control mb-md">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Phone</label>
													<div class="col-md-6 control-label">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-phone"></i>
															</span>
															<input required id="phone" data-plugin-masked-input data-input-mask="(+99) 999-9999-9999" placeholder="(+62) 123-1234-1234" class="form-control">
														</div>
													</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">E-Mail</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input required class="form-control" type="text" placeholder="Email">
													</section>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Password</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input required class="form-control last" type="password" placeholder="Password">
													</section>
												</div>
											</div>
						
												<div class="row">
													<div class="col-sm-9 col-sm-offset-7">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
										</form>
									</div>
								</section>

				</section>
@endsection
<!-- end: page -->
