@extends('layout/template')

@section('title', 'Form Respon Permintaan Barang')
	
<div class="inner-wrapper">

<!-- start: page -->
@section('content')


<section role="main" class="content-body">
    
					<header class="page-header">
						<h2>Form Respon Permintaan Barang</h2>

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

                        <section class="panel">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="fa fa-caret-down"></a>
                                            <a href="#" class="fa fa-times"></a>
                                        </div>
                                
                                        <h2 class="panel-title">Cari Barang</h2>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                            <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th class="hidden-phone">Engine version</th>
                                                    <th class="hidden-phone">CSS grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="gradeX">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">4</td>
                                                    <td class="center hidden-phone">X</td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">5</td>
                                                    <td class="center hidden-phone">C</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.5
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="center hidden-phone">5.5</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 6
                                                    </td>
                                                    <td>Win 98+</td>
                                                    <td class="center hidden-phone">6</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>Internet Explorer 7</td>
                                                    <td>Win XP SP2+</td>
                                                    <td class="center hidden-phone">7</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Trident</td>
                                                    <td>AOL browser (AOL desktop)</td>
                                                    <td>Win XP</td>
                                                    <td class="center hidden-phone">6</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Firefox 1.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center hidden-phone">1.7</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Firefox 1.5</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td class="center hidden-phone">1.8</td>
                                                    <td class="center hidden-phone">A</td>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>							
                                    </div>
                        </section>

                        <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
									    <h2 class="panel-title">Form Respon Permintaan Barang</h2>
									</header>
									
                                    <div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">

                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSuccess">Teknisi Yang ditugaskan</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Ahmad</option>
                                                            <option>Budi</option>
                                                            <option>Andi</option>
                                                        </select>
                                                    </div>
                                            </div>

                                            <div class="form-group">
												<label class="col-md-3 control-label">Tanggal Pengadaan</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control">
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

                        <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
									    <h2 class="panel-title">Form Respon Permintaan Barang</h2>
									</header>
									
                                    <div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">

                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSuccess">Pilih Barang</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Laptop</option>
                                                            <option>Mouse</option>
                                                            <option>Kabel</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSuccess">Model Barang</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md">
                                                            <option>Toshiba</option>
                                                            <option>Acer</option>
                                                            <option>HP</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah Barang</label>
												<div class="col-md-6">
													<input type="number" min = '1' class="form-control" id="inputDefault">
												</div>
											</div>
                                            
                                            <button class="btn btn-primary btn-md pull-right">Tambah Barang </button>
                                        
                                            

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

