@extends('layout/template')

@section('title', 'Dashboard Admin Gudang')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Edit Data Barang</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Data Barang</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					
					<!-- start: page perangkat-->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title">Perangkat</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Jenis Barang</label>
												<div class="col-md-6">
													<select class="form-control mb-md">
														<option >Komputer/PC</option>
														<option >Printer</option>
														<option>Router</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputPlaceholder">Serial Number</label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Name" id="inputPlaceholder">
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputPlaceholder">Model</label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Nick Name" id="inputPlaceholder">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Jumlah</label>
												<div class="col-md-6">
													<div data-plugin-spinner>
														<div class="input-group input-small">
															<input type="text" class="spinner-input form-control" readonly="readonly">
															<div class="spinner-buttons input-group-btn btn-group-vertical">
																<button type="button" class="btn spinner-up btn-xs btn-default">
																	<i class="fa fa-angle-up"></i>
																</button>
																<button type="button" class="btn spinner-down btn-xs btn-default">
																	<i class="fa fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="form-group">
												<label class="col-md-3 control-label">Disabled</label>
												<div class="col-md-6">
													<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
														<div class="input-group input-small">
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn btn-group-vertical">
																<button type="button" class="btn spinner-up btn-xs">
																	<i class="fa fa-angle-up"></i>
																</button>
																<button type="button" class="btn spinner-down btn-xs">
																	<i class="fa fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div> -->

										</form>
									</div>	
								</section>
							</div>
						</div>
				
					<!-- asset tag & hostname -->
						<div class="row">
							<div class="col-md-6">
								<form id="form1" class="form-horizontal">
									<section class="panel">

										<header class="panel-heading">
											<div class="panel-actions">
												<a href="#" class="fa fa-caret-down"></a>
												<a href="#" class="fa fa-times"></a>
											</div>

											<h2 class="panel-title">Asset Tag</h2>
											<p class="panel-subtitle">
												Enter the input so that it becomes a code like the following 
												<code>SIPDG201904-03-NB-00001</code>.
											</p>
										</header>
										<div class="panel-body">
											<div class="form-group">
												<label class="col-md-4 control-label">Kode SIPDG</label>
												<div class="col-md-8">
													<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
														<div>
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn btn-group-vertical">
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">Date of Entry</label>
												<div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker data-plugin-masked-input data-input-mask="99/99/9999" placeholder="dd/mm/yyyy" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">Spinner</label>
												<div class="col-md-8">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
														<div class="input-group" style="width:283px;">
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn">
																<button type="button" class="btn btn-default spinner-up">
																	<i class="fa fa-angle-up"></i>
																</button>
																<button type="button" class="btn btn-default spinner-down">
																	<i class="fa fa-angle-down"></i>
																</button>
															</div>
														</div>
													</div>
													<p>
														with <code>max</code> value set to 10
													</p>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="inputSuccess">Kode Jenis Barang</label>
												<div class="col-md-8">
													<select class="form-control mb-md">
														<option> NB</option>
														<option> PR</option>
														<option> RT</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">Auto Increment</label>
												<div class="col-md-8">
													<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
														<div>
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn btn-group-vertical">
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
										<footer class="panel-footer">
											<!-- <button class="btn btn-primary">Submit </button>
											<button type="reset" class="btn btn-default">Reset</button> -->
										</footer>
									</section>
								</form>
							</div>

							<div class="col-md-6">
								<form id="form2" class="form-horizontal form-bordered">
									<section class="panel">
										<header class="panel-heading">
											<div class="panel-actions">
												<a href="#" class="fa fa-caret-down"></a>
												<a href="#" class="fa fa-times"></a>
											</div>

											<h2 class="panel-title">Hostname</h2>

											<p class="panel-subtitle">
												Enter the input so that it becomes a code like the following <code>SP3467NB</code>.
											</p>
										</header>
										<div class="panel-body">
											<div class="form-group">
												<label class="col-md-4 control-label">Disabled</label>
												<div class="col-md-8">
													<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
														<div>
															<input type="text" class="spinner-input form-control" maxlength="3" readonly>
															<div class="spinner-buttons input-group-btn btn-group-vertical">
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="fc_inputmask_1">SSN</label>
												<div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<!-- <i class="fa fa-plus"></i> -->
														</span>
														<input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="9999" placeholder="__ __ __ __" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label" for="inputSuccess">Kode Jenis Barang</label>
												<div class="col-md-8">
													<select class="form-control mb-md">
														<option> NB</option>
														<option> PR</option>
														<option> RT</option>
													</select>
												</div>
											</div>
										</div>
										<footer class="panel-footer">
											<!-- <button class="btn btn-primary">Submit</button>
											<button type="reset" class="btn btn-default">Reset</button> -->
										</footer>
									</section>

                                <div class="panel-footer">
                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Edit</button>
                                    <button type="reset" class="mb-xs mt-xs mr-xs btn btn-default btn-sm btn-block">Reset</button>
                                </div>

								</form>
							</div>
						</div>
				
				</section>
@endsection
<!-- end: page -->

