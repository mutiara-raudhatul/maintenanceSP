@extends('layout/template')

@section('title', 'Form Permintaan Barang')
<style>

.center {
  margin: 0;
  position: relative;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(40%,0%);
  border : none;
  padding: 7px;


  background-color:  #3498DB ;
  border-radius: 4px;
  color: white;
}

.center: hover {
  box-shadow: inset 0 0 0 20rem var(--darken-1);
}
</style>
	
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
							
										<form class="form-horizontal form-bordered" action="/tambah-kebutuhan-barang" method="POST" >
										{{ csrf_field()}}	
										<div class="form-group">
												<label class="col-md-2 control-label">Jenis Barang</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate" name="id_jenis_barang">
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
													<input type="number" min="1" class="form-control" id="inputDefault" name="jumlah_permintaan">
													
												</div>
											</div>
											<div class="form-group">
											
												<label class="col-md-2 control-label" for="inputDefault">id terakhir</label>
												
												<div class="col-md-6">
												@foreach ($id_terakhir as $item)
													<input name="id_terakhir" type="number" id="inputReadOnly" class="form-control" readonly="readonly" value="{{ $item->id_permintaan_barang}}">
												@endforeach
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6">
													<div class="col-md-6">
														<a href="/tambah-kebutuhan-barang">
															<button type= "submit" class="center">Tambah Barang</button>
															<!-- <button class="btn btn-primary">Add <i class="fa fa-plus"></i></button> -->
                                                        </a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<div class="col-md-6">
														<a href="/detail-permintaan-barang-user/{{$item->id_permintaan_barang}}">
														@foreach ($id_terakhir as $item)
															<button class="center btn btn-warning">Detail </button>
															<!-- <button class="btn btn-primary">Add <i class="fa fa-plus"></i></button> -->
															@endforeach
                                                        </a>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<div class="col-md-6">
													@foreach ($id_terakhir as $item)
													<a href="/cancel-permintaan/{{$item->id_permintaan_barang}}">
													@endforeach
                                                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Apakah Permintaan Dibatalkan?')">Cancel</button>
                                                        </a>

													</div>
												</div>
											</div>


										
										</div>									
									</div>
                                   
						</section>
								</div>
                        </div>
                    </div>
</section>


</div>
<!-- end: page -->

