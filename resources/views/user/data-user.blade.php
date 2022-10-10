@extends('layout/template')

@section('title', 'Dashboard Admin Gudang')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data User</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data User</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

                    <section class="panel">
							<header class="panel-heading">
								
								<div class="panel-actions">
									<div class="form-group">
										<label class="col-md-6 control-label">
											<h2 class="panel-title">Jumlah :</h2>
										</label>
										
										<div class="col-md-4">
											<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
												<div>
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn btn-group-vertical">
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- <a href="#" class="fa fa-caret-down"></a> -->
									<!-- <th class="center">Jumlah</th> -->
								</div>
								
								<h2 class="panel-title">Karyawan</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-details-user">
									<thead>
										<tr>
											<th>Nama</th>
											<th class="center">NIP</th>
                                            <th class="center">Work Unit</th>
											<th class="center">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>Hermawan Ardiyanto</td>
											<td class="center">3467</td>
                                            <td class="center">Kabau Sirah</td>
											<td class="center">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-success">Edit</button> | 
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">Delete</button>
											</td>
										</tr>
										<tr class="gradeC">
                                            <td>Agus Rianto</td>
											<td class="center">3345</td>
                                            <td class="center">SP Procurement</td>
											<td class="center">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-success">Edit</button> | 
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">Delete</button>
											</td>
										</tr>
										<tr class="gradeA">
                                            <td>Andhika Rio</td>
											<td class="center">6646</td>
                                            <td class="center">Crusher Mech Maint</td>
											<td class="center">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-success">Edit</button> | 
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger">Delete</button>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>

							<!-- <div>
								<div class="col-md">
									<h2 class="pb-lg">Toggle</h2>
									<div class="toggle" data-plugin-toggle>
										<section class="toggle active">
											<label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
											<div class="toggle-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p></p>
											</div>
										</section>
									</div>
								</div>

							</div> -->
						</section>
                    
				</section>
@endsection
<!-- end: page -->
