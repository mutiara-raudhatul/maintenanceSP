@extends('layout/template')

@section('title', 'Form Maintenance Teknisi')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Form Maintenance Teknisi</h2>
    
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
        
                        <h2 class="panel-title">Maintenance Teknisi</h2>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" method="get">
                            
                            <!-- Input TextArea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textareaDefault">Detail Kerusakan</label>
                                    <div class="col-md-6">
                                    <textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                        <!-- <p>
                                            <code>max-length</code> set to 140.
                                        </p> -->            
                                    </div>
                            </div>
                            <!-- Input Date Range -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Lama Pengerjaan</label>
                                    <div class="col-md-6">
                                        <div class="input-daterange input-group" data-plugin-datepicker>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" class="form-control" name="start">
                                            <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control" name="end">
                                        </div>
                                    </div>
                            </div>      
                            <!-- Input Biasa -->
                            <!-- <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Serial Number</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputDefault">
                                </div>
                            </div>  -->
                            <!-- Input select-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Serial Number</label>
                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <!-- <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                        </optgroup> -->
                                    </select>
                                </div>
                            </div> 
                            <!-- Input TextArea -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="textareaDefault">Note</label>
                                    <div class="col-md-6">
                                    <textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                        <!-- <p>
                                            <code>max-length</code> set to 140.
                                        </p> -->            
                                    </div>
                            </div> 
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Maintenance</label>
                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate">
                                        <option value="CT">Multimedia</option>
                                        <option value="DE">Network</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Input Select -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenis Barang</label>
                                <div class="col-md-6">
                                    <select data-plugin-selectTwo class="form-control populate">
                                        <optgroup label="Network">
                                            <option value="CT">TV atau LCD</option>
                                            <option value="DE">Projector</option>
                                            <option value="CT">Layar Screen</option>
                                            <option value="DE">CCTV</option>
                                        </optgroup>
                                        <optgroup label="Multimedia">
                                            <option value="CT">TV atau LCD</option>
                                            <option value="DE">Projector</option>
                                            <option value="CT">Layar Screen</option>
                                            <option value="DE">CCTV</option>
                                        </optgroup>
                                        
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
