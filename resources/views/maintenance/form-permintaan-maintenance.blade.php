@extends('layout/template')

@section('title', 'Form Permintaan Maintenance')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Form Permintaan Maintenance</h2>
    
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
        
                        <h2 class="panel-title">Permintaan Maintenance</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="get">
                            <!-- Input Biasa -->
                            <!-- <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Default</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault">
                                </div>
                            </div> -->
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Barang</label>
                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate">
                                        <optgroup label="Hardware">
                                            <option value="AZ">Laptop</option>
                                            <option value="CO">Printer</option>
                                            <option value="ID">Mouse</option>
                                            <option value="MT">Komputer</option>
                                        </optgroup>
                                        <optgroup label="Software">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!-- Input Date -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tanggal</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" data-plugin-datepicker class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <!-- Input TextArea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textareaDefault">Masalah yang terjadi</label>
                                    <div class="col-md-6">
                                    <textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                        <!-- <p>
                                            <code>max-length</code> set to 140.
                                        </p> -->            
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
