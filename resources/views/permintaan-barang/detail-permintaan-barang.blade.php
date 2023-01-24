@extends('layout/template')

@section('title', 'Detail Permintaan Barang')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail Permintaan Barang</h2>
    
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

    <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                           
                        </div>
        
                        <h2 class="panel-title">Data Permintaan</h2>
                    </header>

                    <div class="panel-body">
                    @foreach($data_user as $d)
                        <p class="mb-lg"> Nama Pemohon         :  {{ $d->name }} </p>
                        <p class="mb-lg"> Bidang Kerja Pemohon :  {{ $d->unit_kerja }}</p>
                        
                    @endforeach     
                    </div>
                </section>	


                <div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Data Barang Diminta</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered mb-none">
												<thead>
													<tr>
														<th>No</th>
														<th>Barang</th>
                                                        <th>Status</th>	
														<th>Action</th>														
													</tr>
												</thead>
												<?php $no = 1; ?>
                                    			@foreach($data_detail as $detail)
												<tbody>
													<tr>
														<td>{{$no++}}</td>
														<td>{{ $detail->nama }}</td>
                                                        <td class="status">
                                                            @if ($detail->status_permintaan=='Diajukan')
                                                                    <!-- button detail -->
                                                                        <button type="button" class="btn btn-primary btn-sm">Diajukan</button>
                                                            @elseif($detail->status_permintaan=='Diterima')
                                                                    <!-- button detail -->
                                                                        <button type="button" class="btn btn-success btn-sm">Diterima</button>
                                                            @elseif($detail->status_permintaan=='Ditolak')
                                                                    <!-- button detail -->
                                                                        <button type="button" class="btn btn-danger btn-sm">Ditolak</button>
                                                            @elseif($detail->status_permintaan=='Dipending')
                                                                    <!-- button detail -->
                                                            <button type="button" class="btn btn-warning btn-sm">Dipending</button>
                                                            @endif
                                                        </td>
														<td>
                                                            @if ($detail->status_permintaan=='Diajukan')
                                                                <a href="/form-respon-permintaan/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">                                                               
                                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Terima</button>
                                                                </a> 
                                                                <a href="/pending-permintaan-barang/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">
                                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning" onclick="return confirm('Apakah permintaan dipending?')">Pending</button>
                                                                </a>
                                                               
                                                                <a href="/tolak-permintaan-barang/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">
                                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Yakin Menolak Permintaan?')">Tolak</button>
                                                                </a>
                                                                
                                                            @elseif ($detail->status_permintaan=='Dipending')
                                                                <a href="/form-respon-permintaan/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">                                                               
                                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Terima</button>
                                                                </a> 
                                                                <a href="/tolak-permintaan-barang/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">
                                                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger" onclick="return confirm('Yakin Menolak Permintaan?')">Tolak</button>
                                                                </a>
                                                                
                                                            @else
                                                                
                                                            @endif
                                                        </td>														
													</tr>
												</tbody>
                                                @endforeach
											</table>
										</div>
									</div>

                                    <footer class="panel-footer" >
                                        <a href="/permintaan-barang">
                                           <button type="button" class="mb-xs mt-xs mr-xs btn btn-info">Kembali</button>
                                        </a>
                                    </footer>
                                   
								</section>
							</div>

@endsection
<!-- end: page -->
