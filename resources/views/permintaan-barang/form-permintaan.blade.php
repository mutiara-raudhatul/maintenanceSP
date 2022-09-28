@extends('layout/template')

@section('title', 'Form Permintaan Barang')
	
<div class="inner-wrapper">

<!-- start: page -->
@section('content')
				
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Form Permintaan Barang</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Basic</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

                        <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Form Permintaan Barang</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSuccess">Barang 1</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Komputer</option>
                                                            <option>Laptop</option>
                                                            <option>Printer</option>
                                                        </select>
                                                    </div>
                                            </div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah</label>
												<div class="col-md-6">
													<input type="number" min="1" class="form-control" id="inputDefault">
												</div>
											</div>
                                            <!-- <div class="form-group">
												<label class="col-md-3 control-label">Jumlah</label>
												<div class="col-md-6">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
														<div class="input-group" style="width:150px;">
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
											</div> -->

                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSuccess">Barang 2</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Komputer</option>
                                                            <option>Laptop</option>
                                                            <option>Printer</option>
                                                        </select>
                                                    </div>
                                            </div>
											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah</label>
												<div class="col-md-6">
													<input type="number" class="form-control" id="inputDefault">
												</div>
											</div> -->
                                            <div class="form-group">
												<label class="col-md-3 control-label">Jumlah</label>
												<div class="col-md-6">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
														<div class="input-group" style="width:150px;">
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
                                                    <label class="col-md-3 control-label" for="inputSuccess">Barang 3</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Komputer</option>
                                                            <option>Laptop</option>
                                                            <option>Printer</option>
                                                        </select>
                                                    </div>
                                            </div>
											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah</label>
												<div class="col-md-6">
													<input type="number" class="form-control" id="inputDefault">
												</div>
											</div> -->
                                            <div class="form-group">
												<label class="col-md-3 control-label">Jumlah</label>
												<div class="col-md-6">
													<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
														<div class="input-group" style="width:150px;">
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
												<label class="col-md-3 control-label">Tanggal Permintaan</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" id="inputReadOnly" class="form-control" readonly="readonly">
													</div>
												</div>
											</div>

                                            <div class="form-group">
												<label class="col-md-3 control-label">Upload Surat Izin Permintaan </label>
												<div class="col-md-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
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
											</div>

										</form>
									</div>
                                    <footer class="panel-footer" >
                                        <button class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </footer>
								</section>
                        </div>
                            </div>
</section>


</div>
<!-- end: page -->

