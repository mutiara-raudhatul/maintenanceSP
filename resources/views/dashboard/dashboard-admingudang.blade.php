@extends('layout/template')

@section('title', 'Dashboard Admin Gudang')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<div class="row">
					</div>				

					<div class="row">
							<div class="col-md-6 col-lg-12 col-xl-6">
								<div class="row">
									<!-- highchart -->
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-primary">
											<div class="panel-body">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-primary">
															<i class="fa fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Permintaan Barang</h4>
															<div class="info">
																<strong class="amount">{{$jumperminbarang}}</strong>
																<span class="text-primary">(14 unread)</span>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-muted text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-secondary">
											<div class="panel-body">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-secondary">
															<i class="fa fa-cube"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Jenis Barang</h4>
															<div class="info">
																<strong class="amount"> {{$jumjenisbarang}}</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-muted text-uppercase">(withdraw)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-tertiary">
											<div class="panel-body">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-tertiary">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Barang</h4>
															<div class="info">
																<strong class="amount">3</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-muted text-uppercase">(statement)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<section class="panel panel-featured-left panel-featured-quartenary">
											<div class="panel-body">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon bg-quartenary">
															<i class="fa fa-user"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">User</h4>
															<div class="info">
																<strong class="amount">3765</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a class="text-muted text-uppercase">(report)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-6"> 
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-6" id="permintaan"></div>
									<div class="col-md-12 col-lg-6 col-xl-6" id="permintaan_barang_tahun"></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-6"> 
								<div class="row">
									<p>  </p>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-6"> 
								<div class="row">
									<div class="col-md-12 col-lg-6 col-xl-6" id="rentang"></div>
									<div class="col-md-12 col-lg-6 col-xl-6" id="cdimensi"></div>
								</div>
							</div>
					</div>	
				</section>
@endsection
<!-- end: page -->

@section('footer')
	<script src="{{asset('assets/highcharts/highcharts.js')}}"></script>
	<script>
		// Create the chart

		Highcharts.chart('permintaan_barang_tahun', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Permintaan Pertahun'
			},
			subtitle: {
				text: 'Source: ' +
					'<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
					'target="_blank">SSB</a>'
			},
			xAxis: {
				categories: {!!json_encode($categories)!!},
				crosshair: true
			},
			yAxis: {
				title: {
					useHTML: true,
					text: 'Permintaan Pertahun'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Permintaan Barang',
				data: {!!json_encode($jumlah_user_pb)!!}

			},
			{
				name: 'Permintaan Maintenance',
				data: {!!json_encode($jumlah_user_pm)!!}

			}]
		});

		Highcharts.chart('permintaan', {
			chart: {
				type: 'area'
			},
			title: {
				text: 'Permintaan Perbulan Tahun Ini'
			},
			subtitle: {
				text: 'Source: ' +
					'<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
					'target="_blank">SSB</a>'
			},
			xAxis: {
				categories: {!!json_encode($categories_bulan)!!},
				crosshair: true
			},
			yAxis: {
				title: {
					useHTML: true,
					text: 'Permintaan Perbulan Tahun Ini'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Permintaan Barang',
				data: {!!json_encode($jumlah_user_bulan_pb)!!}

			},
			{
				name: 'Permintaan Maintenance',
				data: {!!json_encode($jumlah_user_bulan_pm)!!}

			}]
		});

		Highcharts.chart('rentang', {
			chart: {
				type: 'pie'
			},
			title: {
				text: 'Permintaan Pertahun'
			},
			subtitle: {
				text: 'Source: ' +
					'<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
					'target="_blank">SSB</a>'
			},
			xAxis: {
				categories: {!!json_encode($categories)!!},
				crosshair: true
			},
			yAxis: {
				title: {
					useHTML: true,
					text: 'Permintaan Pertahun'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Permintaan Barang',
				data: {!!json_encode($jumlah_user_pb)!!}

			}]
		});

		Highcharts.chart('cdimensi', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Permintaan Barang Berdasarkan Jenis Barang'
			},
			subtitle: {
				text: 'Source: ' +
					'<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
					'target="_blank">SSB</a>'
			},
			xAxis: {
				categories: {!!json_encode($categories_jenis)!!},
				crosshair: true
			},
			yAxis: {
				title: {
					useHTML: true,
					text: 'Permintaan Pertahun'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Jenis Barang',
				data: {!!json_encode($jumlah_jenis)!!}

			}]
		});
	</script>
@endsection