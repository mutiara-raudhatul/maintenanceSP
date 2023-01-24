@extends('layout/template')

@section('title', 'Form Respon Permintaan Barang')

<style>

.center {
  margin: 0;
  position: relative;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, 30%);
  transform: translate(40%, -110%);
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

                        <div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
									    <h2 class="panel-title">Respon Permintaan Barang Dipenuhi</h2>
									</header>
									
                                    <div class="panel-body">                             
                                      
                                    <form class="form-horizontal form-bordered" method="post" action="/tambah-respon-permintaan/{{$detail->id_permintaan_barang}}/{{$detail->kode_jenis}}">
                                        {{ csrf_field()}}
                                        
                                       
                                       
                                        <div class="form-group">
                                                    <label class="col-md-2 control-label" for="inputSuccess">Teknisi Yang ditugaskan</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control mb-md" name="nip_teknisi" >   
                                                            <option selected disabled value="">Pilih Teknisi</option>                                                    
                                                            @foreach ($respon as $item)
                                                                @if ($item->role=="teknisi")
                                                                    <option value="{{ $item->id}}">{{$item->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                        </div>
                                    
                                        
                                        <div class="form-group">
                                        <label class="col-md-2 control-label" >Catatan</label>
                                        <div class="col-md-6">
                                            <textarea type="text" class="form-control" id="catatan" name="catatan"> </textarea>
                                        </div>		
                                        </div>
                                       

                                        <div class="form-group">
                                                    <label class="col-md-2 control-label" for="inputSuccess">Barang</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control populate mb-md" name="id_serial_number"  required>
                                                            <option label="Jenis Barang - Model Barang - Serial Number" disabled selected></option>
                                                            @foreach ($barang as $item)
                                                               
                                                                    <option value="{{ $item->id_serial_number }}">{{$item->nama}} - {{$item->model_barang}} - {{$item->id_serial_number}}</option>
                                                               
														    @endforeach
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="col-md-2 control-label" >NIP untuk Barang</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="nip" name="nip">
                                                </div>
                                        </div>
                                        
                                        <br>
                                        <footer class="panel-footer" >
                                            <button type="submit" class="btn btn-primary">Submit </button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </footer>
								</form>
									</div>                                  
								</section>
                            </div>
                        </div>						
</section>

</div>
<!-- end: page -->


