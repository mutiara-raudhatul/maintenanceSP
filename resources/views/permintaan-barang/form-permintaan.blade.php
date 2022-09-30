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
											<div class="row">
												<div class="col-sm-6">
													<div class="mb-md">
														<button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
													</div>
												</div>
											</div>
											<table class="table table-bordered table-striped mb-none" id="datatable-editable">
												<thead>
													<tr>
														<th>No</th>
														<th>Barang</th>
														<th>Jumlah</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr class="gradeX">
														<td>1</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeC">
														<td>2</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeA">
														<td>3</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeA">
														<td>4</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeA">
														<td>4</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													
													<tr class="gradeA">
														<td>5</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeA">
														<td>6</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeA">
														<td>7</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeX">
														<td>8</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeX">
														<td>9</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													<tr class="gradeX">
														<td>10</td>
														<td> Laptop
														</td>
														<td>2</td>
														<td class="actions">
															<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
															<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
															<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
															<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
													
												</tbody>
											</table>
										</div>

										<br>
										<form class="form-horizontal form-bordered" method="get">
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

