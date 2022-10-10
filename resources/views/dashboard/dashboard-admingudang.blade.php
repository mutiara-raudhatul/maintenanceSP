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

													<div class="container">
														<div class="row">
															<div class="col-md-5 offset-md-1">
																<div class="panel panel-default">
																	<div class="panel-body">
																		<canvas id="canvas" height="20" width="30"></canvas>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
													<script>
														var year = <?php echo $year; ?>;
														var user = <?php echo $user; ?>;
														var barChartData = {
															labels: year,
															datasets: [{
																label: 'User',
																backgroundColor: "lightblue",
																data: user
															}]
														};

														window.onload = function() {
															var ctx = document.getElementById("canvas").getContext("2d");
															window.myBar = new Chart(ctx, {
																type: 'bar',
																data: barChartData,
																options: {
																	elements: {
																		rectangle: {
																			borderWidth: 2,
																			borderColor: '#c1c1c1',
																			borderSkipped: 'bottom'
																		}
																	},
																	responsive: true,
																	title: {
																		display: true,
																		text: 'Yearly User Joined'
																	}
																}
															});
														};
													</script>

													<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
														<!-- Flot: Sales JSOFT Admin -->
														<div class="chart chart-sm" data-sales-rel="JSOFT Admin" id="flotDashSales1" class="chart-active"></div>
														<script>

															var flotDashSales1Data = [{
																
																labels: year,
																	datasets: [{
																	label: 'User',
																	backgroundColor: "lightblue",
																	data: user
																}],
																color: "#0088cc"
															}];

															// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

														</script>

														<!-- Flot: Sales JSOFT Drupal -->
														<div class="chart chart-sm" data-sales-rel="JSOFT Drupal" id="flotDashSales2" class="chart-hidden"></div>
														<script>

															var flotDashSales2Data = [{
																data: [
																	["Jan", 240],
																	["Feb", 240],
																	["Mar", 290],
																	["Apr", 540],
																	["May", 480],
																	["Jun", 220],
																	["Jul", 170],
																	["Aug", 190]
																],
																color: "#2baab1"
															}];

															// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

														</script>

														<!-- Flot: Sales JSOFT Wordpress -->
														<div class="chart chart-sm" data-sales-rel="JSOFT Wordpress" id="flotDashSales3" class="chart-hidden"></div>
														<script>

															var flotDashSales3Data = [{
																data: [
																	["Jan", 840],
																	["Feb", 740],
																	["Mar", 690],
																	["Apr", 940],
																	["May", 1180],
																	["Jun", 820],
																	["Jul", 570],
																	["Aug", 780]
																],
																color: "#734ba9"
															}];

															// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

														</script>
													</div>

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
							<div class="col-md-6 col-lg-12 col-xl-6">
								<div class="row">
									<!-- highchart -->
									<div class="col-md-12 col-lg-6 col-xl-6" id="chart-permintaan">
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
															<h4 class="title">Support Questions</h4>
															<div class="info">
																<strong class="amount">1281</strong>
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
															<i class="fa fa-usd"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Profit</h4>
															<div class="info">
																<strong class="amount">$ 14,890.30</strong>
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
															<h4 class="title">Today's Orders</h4>
															<div class="info">
																<strong class="amount">38</strong>
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
															<h4 class="title">Today's Visitors</h4>
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
				categories: [
					'2010',
					'2011',
					'2012',
					'2013',
					'2014',
					'2015',
					'2016',
					'2017',
					'2018',
					'2019',
					'2010',
					'2021'
				],
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
				name: 'Oil and gas extraction',
				data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
					14.32, 14.13, 13.93, 13.21, 12.16]

			}, {
				name: 'Manufacturing industries and mining',
				data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
					11.94, 11.96, 11.59, 11.42, 11.76]

			}, {
				name: 'Road traffic',
				data: [10.00, 9.93, 9.97, 10.01, 10.23, 10.26, 10.00,
					9.12, 9.36, 8.72, 8.38, 8.69]

			}, {
				name: 'Agriculture',
				data: [4.35, 4.32, 4.34, 4.39, 4.46, 4.52, 4.58, 4.55,
					4.53, 4.51, 4.49, 4.57]

			}]
		});
	</script>
@endsection