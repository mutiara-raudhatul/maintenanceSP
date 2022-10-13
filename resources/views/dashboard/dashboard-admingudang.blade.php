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
								<section class="panel">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-8">
												<div class="chart-data-selector" id="salesSelectorWrapper">
													<h2>
														Sales:
														<strong>
															<select class="form-control" id="salesSelector">
																<option value="JSOFT Admin" selected>JSOFT Admin</option>
																<option value="JSOFT Drupal" >JSOFT Drupal</option>
																<option value="JSOFT Wordpress" >JSOFT Wordpress</option>
															</select>
														</strong>
													</h2>
												</div>
											</div>
											<div class="col-lg-4 text-center">
												<h2 class="panel-title mt-md">Sales Goal</h2>
												<div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
													<div class="liquid-meter">
														<meter min="0" max="100" value="35" id="meterSales"></meter>
													</div>
													<div class="liquid-meter-selector" id="meterSalesSel">
														<a href="#" data-val="35" class="active">Monthly Goal</a>
														<a href="#" data-val="28">Annual Goal</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
					</div>	
				</section>
@endsection
<!-- end: page -->

@section('footer')
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script>
		Highcharts.chart('chart-permintaan', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Emissions to air in Norway'
			},
			subtitle: {
				text: 'Source: ' +
					'<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
					'target="_blank">SSB</a>'
			},
			xAxis: {
				categories:{!!json_encode($categories)!!},
				crosshair: true
			},
			yAxis: {
				title: {
					useHTML: true,
					text: 'Million tonnes CO<sub>2</sub>-equivalents'
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
				name: 'Jumlah Permintaan Barang',
				data: {!!json_encode($pb)!!}

			}, {
				name: 'Jumlah Permintaan Maintenance',
				data: {!!json_encode($pm)!!}
			}]
		});

		// Create the chart
		Highcharts.chart('jenisbarang', {
			chart: {
				type: 'pie'
			},
			title: {
				text: 'Browser market shares. January, 2022'
			},
			subtitle: {
				text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
			},

			accessibility: {
				announceNewData: {
					enabled: true
				},
				point: {
					valueSuffix: '%'
				}
			},

			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						format: '{point.name}: {point.y:.1f}%'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},

			series: [
				{
					name: "Browsers",
					colorByPoint: true,
					data: [
						{
							name: "Chrome",
							y: 61.04,
							drilldown: "Chrome"
						},
						{
							name: "Safari",
							y: 9.47,
							drilldown: "Safari"
						},
						{
							name: "Edge",
							y: 9.32,
							drilldown: "Edge"
						},
						{
							name: "Firefox",
							y: 8.15,
							drilldown: "Firefox"
						},
						{
							name: "Other",
							y: 11.02,
							drilldown: null
						}
					]
				}
			],
			drilldown: {
				series: [
					{
						name: "Chrome",
						id: "Chrome",
						data: [
							[
								"v97.0",
								36.89
							],
							[
								"v96.0",
								18.16
							],
							[
								"v95.0",
								0.54
							],
							[
								"v94.0",
								0.7
							],
							[
								"v93.0",
								0.8
							],
							[
								"v92.0",
								0.41
							],
							[
								"v91.0",
								0.31
							],
							[
								"v90.0",
								0.13
							],
							[
								"v89.0",
								0.14
							],
							[
								"v88.0",
								0.1
							],
							[
								"v87.0",
								0.35
							],
							[
								"v86.0",
								0.17
							],
							[
								"v85.0",
								0.18
							],
							[
								"v84.0",
								0.17
							],
							[
								"v83.0",
								0.21
							],
							[
								"v81.0",
								0.1
							],
							[
								"v80.0",
								0.16
							],
							[
								"v79.0",
								0.43
							],
							[
								"v78.0",
								0.11
							],
							[
								"v76.0",
								0.16
							],
							[
								"v75.0",
								0.15
							],
							[
								"v72.0",
								0.14
							],
							[
								"v70.0",
								0.11
							],
							[
								"v69.0",
								0.13
							],
							[
								"v56.0",
								0.12
							],
							[
								"v49.0",
								0.17
							]
						]
					},
					{
						name: "Safari",
						id: "Safari",
						data: [
							[
								"v15.3",
								0.1
							],
							[
								"v15.2",
								2.01
							],
							[
								"v15.1",
								2.29
							],
							[
								"v15.0",
								0.49
							],
							[
								"v14.1",
								2.48
							],
							[
								"v14.0",
								0.64
							],
							[
								"v13.1",
								1.17
							],
							[
								"v13.0",
								0.13
							],
							[
								"v12.1",
								0.16
							]
						]
					},
					{
						name: "Edge",
						id: "Edge",
						data: [
							[
								"v97",
								6.62
							],
							[
								"v96",
								2.55
							],
							[
								"v95",
								0.15
							]
						]
					},
					{
						name: "Firefox",
						id: "Firefox",
						data: [
							[
								"v96.0",
								4.17
							],
							[
								"v95.0",
								3.33
							],
							[
								"v94.0",
								0.11
							],
							[
								"v91.0",
								0.23
							],
							[
								"v78.0",
								0.16
							],
							[
								"v52.0",
								0.15
							]
						]
					}
				]
			}
		});
	</script>
@endsection