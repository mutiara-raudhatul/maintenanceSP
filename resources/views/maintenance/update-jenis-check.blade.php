@extends('layout/template')

@section('title', 'Update Jenis Check')


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
        
                        <h2 class="panel-title">Update Jenis Check</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="get">
                            <!-- Input Biasa -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">ID Jenis Check</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault" value="1">
                                </div>
                            </div>
                            <!-- Input Biasa -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Jenis Check</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault" value="Check Box">
                                </div>
                            </div>
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipe Check</label>
                                <div class="col-md-6">
                                    <select class="form-control populate">
                                        <option disabled>Pilih</option>
                                        <option value="CT" selected="">Check Box</option>
                                        <option value="DE">Information</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Maintenance</label>
                                <div class="col-md-6">
                                    <select class="form-control populate">
                                        <option disabled >Pilih</option>
                                        <option value="CT" selected>Multimedia</option>
                                        <option value="DE">Network</option>
                                    </select>
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
    <!-- end: page -->
</section>
				
@endsection
<!-- end: page -->
