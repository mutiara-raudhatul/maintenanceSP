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

										<!-- start: page -->
						<section class="panel">
							
									<div class="panel-body">
							
										<form class="form-horizontal form-bordered" action="#">
											<div class="form-group">
												<label class="col-md-2 control-label">Jenis Barang</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate">
														<optgroup label="Pilih Barang">
														@foreach ($jenis_barang as $item)
															<option value="{{ $item->id_jenis_barang }}">{{$item->jenis_barang}}</option>
														@endforeach
														</optgroup>	
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Jumlah</label>
												<div class="col-md-6">
													<input type="number" min="1" class="form-control" id="inputDefault">
												</div>
											</div>
										</form>

										<br>

										<div class="row">
												<div class="col-md-2">
													<div class="mb-md">
														<button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
													</div>
												</div>
										</div>
										<br>

											
											<table class="table table-bordered table-striped mb-none">
												<thead>
													<tr>
														<th>No</th>
														<th>Barang</th>
														<th>Jumlah</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													
													<tr class="gradeX">
														<td>1</td>
														<td>Laptop</td>
														<td>Jumlah</td>
														<td class="actions">

															<a href="#" class="on-default remove-row"onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
											
												</tbody>
											</table>
										</div>

										<br>
										<form class="form-horizontal form-bordered" method="get">
                                            <div class="form-group">
												<label class="col-md-2 control-label">Tanggal Permintaan</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" id="inputReadOnly" class="form-control" readonly="readonly" value="{{ date('d-m-Y') }}">
													</div>
												</div>
											</div>

                                            <div class="form-group">
												<label class="col-md-2 control-label">Upload Surat Izin Permintaan </label>
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
								<div id="dialog" class="modal-block mfp-hide">
									<section class="panel">
										<header class="panel-heading">
											<h2 class="panel-title">Are you sure?</h2>
										</header>
										<div class="panel-body">
											<div class="modal-wrapper">
												<div class="modal-text">
													<p>Are you sure that you want to delete this row?</p>
												</div>
											</div>
										</div>
										<footer class="panel-footer">
											<div class="row">
												<div class="col-md-12 text-right">
													<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
													<button id="dialogCancel" class="btn btn-default">Cancel</button>
												</div>
											</div>
										</footer>
									</section>
								</div>
                        </div>
                    </div>
</section>


</div>
<!-- end: page -->

