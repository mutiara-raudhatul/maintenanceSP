@extends('layout/template')

@section('title', 'Tambah Jenis Check')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Jenis Check Maintenance</h2>
    
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
                            <!-- <a href="#" class="fa fa-times"></a> -->
                        </div>
        
                        <h2 class="panel-title">Tambah Jenis Check</h2>
                    </header>
                    <form class="form-horizontal form-bordered" method="post" action="{{route('simpan-jenisC')}}">
                        {{ csrf_field()}}
                    <div class="panel-body">
                       
                            <!-- Input Biasa -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">ID Jenis Check</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault" name="id_jenis_check">
                                </div>
                            </div>
                            <!-- Input Biasa -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Jenis Check</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault" name="jenis_check">
                                </div>
                            </div>
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipe Check</label>
                                <div class="col-md-6">
                                    <select class="form-control populate" name="tipe_check">
                                        <option disabled selected>Pilih</option>
                                        <option value="Check">Check Box</option>
                                        <option value="Info">Information</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Maintenance</label>
                                <div class="col-md-6">
                                    <select class="form-control populate" name="id_jenis_maintenance">
                                        <option disabled selected>Pilih</option>
                                        @foreach ($jenis_maintenance as $item)
                                        <option value="{{ $item->id_jenis_maintenance }}">{{ $item->jenis_maintenance }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                    <footer class="panel-footer" >
                        <button class="btn btn-primary" type="submit">Submit </button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </footer>
                    </form>
                </section>
        
               
        
            </div>
        </div>
    <!-- end: page -->
</section>
				
@endsection
<!-- end: page -->
