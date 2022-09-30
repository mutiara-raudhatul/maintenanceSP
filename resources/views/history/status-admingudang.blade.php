@extends('layout/template')

@section('title', 'History Admin Gudang')


<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>History</h2>
					
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
							<div class="col-xl-6 col-lg-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Status Permintaan Barang</h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<th>#</th>
													<th>Nama Pemohon</th>
													<th>Permintaan</th>
													<th>Unit Kerja</th>
													<th>Tanggal Permintaan</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mutiara Raudhatul Jannah</td>
													<td>Printer</td>
													<td>ICT - Kantor Pusat</td>
													<td>12 September 2022</td>
													<td><span class="label label-success">Success</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Mutiara Raudhatul Jannah</td>
													<td>Projector</td>
													<td>ICT - Kantor Pusat</td>
													<td>20 September 2022</td>
													<td><span class="label label-info">New</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</section>
							<section class="panel">
									<header class="panel-heading panel-heading-transparent">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Aktivitas Harian</h2>
									</header>
									<div class="panel-body">
										<div class="timeline timeline-simple mt-xlg mb-md">
											<div class="tm-body">
												<div class="tm-title">
													<h3 class="h5 text-uppercase">September 2022</h3>
												</div>
												<ol class="tm-items">
													<li>
														<div class="tm-box">
															<p class="text-muted mb-none">Today</p>
															<p>
																Memenuhi permintaan di 
																<ul>
																	<li> ICT - Kantor Pusat</li>
																	<li> Akuntansi - Kantor Pusat</li>
																</ul>
															</p>
															<p>
																Barang masuk 
																<ul>
																	<li> 3 Printer merek epson</li>
																	<li> 1 Komputer merek Asus</li>
																</ul>
															</p>
														</div>
													</li>
													<li>
														<div class="tm-box">
															<p class="text-muted mb-none">20 September 2022</p>
															<p>
															Restock Barang
															<ul>
																	<li> 2 Projector merek epson</li>
																	<li> 5 Switch</li>
																</ul>
															</p>
														</div>
													</li>
												</ol>
											</div>
										</div>
									</div>
								</section>
							<section class="panel">
									<header class="panel-heading panel-heading-transparent">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Aktivitas Harian</h2>
									</header>
									<div class="timeline">
										<div class="tm-body">
											<div class="tm-title">
												<h3 class="h5 text-uppercase">November 2013</h3>
											</div>
											<ol class="tm-items">
												<li>
													<div class="tm-info">
														<div class="tm-icon"><i class="fa fa-star"></i></div>
														<time class="tm-datetime" datetime="2013-11-22 19:13">
															<div class="tm-datetime-date">7 months ago.</div>
															<div class="tm-datetime-time">07:13 PM</div>
													</time>
													</div>
													<div class="tm-box appear-animation" data-appear-animation="fadeInRight"data-appear-animation-delay="100">
														<p>
															It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
														</p>
														<div class="tm-meta">
															<span>
																<i class="fa fa-user"></i> By <a href="#">John Doe</a>
															</span>
															<span>
																<i class="fa fa-tag"></i> <a href="#">Porto</a>, <a href="#">Awesome</a>
															</span>
															<span>
																<i class="fa fa-comments"></i> <a href="#">5652 Comments</a>
															</span>
														</div>
													</div>
												</li>
												<li>
													<div class="tm-info">
														<div class="tm-icon"><i class="fa fa-thumbs-up"></i></div>
														<time class="tm-datetime" datetime="2013-11-19 18:13">
															<div class="tm-datetime-date">7 months ago.</div>
															<div class="tm-datetime-time">06:13 PM</div>
														</time>
													</div>
													<div class="tm-box appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="250">
														<p>
															What is your biggest developer pain point?
														</p>
													</div>
												</li>
												<li>
													<div class="tm-info">
														<div class="tm-icon"><i class="fa fa-map-marker"></i></div>
														<time class="tm-datetime" datetime="2013-11-14 17:25">
															<div class="tm-datetime-date">7 months ago.</div>
															<div class="tm-datetime-time">05:25 PM</div>
														</time>
													</div>
													<div class="tm-box appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="400">
														<p>
															<a href="#">John Doe</a> is reading a book at <span class="text-primary">New York Public Library</span>
														</p>
														<blockquote class="primary">
															<p>Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.</p>
															<small>A. Einstein,
																<cite title="Brainyquote">Brainyquote</cite>
															</small>
														</blockquote>
														<div id="gmap-checkin-example" class="mb-sm" style="height: 250px; width: 100%;"></div>
														<div class="tm-meta">
															<span>
																<i class="fa fa-user"></i> By <a href="#">John Doe</a>
															</span>
															<span>
																<i class="fa fa-comments"></i> <a href="#">9 Comments</a>
															</span>
														</div>
													</div>
												</li>
											</ol>
											<div class="tm-title">
												<h3 class="h5 text-uppercase">September 2013</h3>
											</div>
											<ol class="tm-items">
												<li>
													<div class="tm-info">
														<div class="tm-icon"><i class="fa fa-heart"></i></div>
														<time class="tm-datetime" datetime="2013-09-08 16:13">
															<div class="tm-datetime-date">9 months ago.</div>
															<div class="tm-datetime-time">04:13 PM</div>
														</time>
													</div>
													<div class="tm-box appear-animation" data-appear-animation="fadeInRight">
														<p>
															Checkout! How cool is that!
														</p>
														<div class="thumbnail-gallery">
															<a class="img-thumbnail" href="assets/images/projects/project-4.jpg">
																<img width="215" src="assets/images/projects/project-4.jpg">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
															<a class="img-thumbnail" href="assets/images/projects/project-3.jpg">
																<img width="215" src="assets/images/projects/project-3.jpg">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
															<a class="img-thumbnail" href="assets/images/projects/project-2.jpg">
																<img width="215" src="assets/images/projects/project-2.jpg">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
														</div>
														<div class="tm-meta">
															<span>
																<i class="fa fa-user"></i> By <a href="#">John Doe</a>
															</span>
															<span>
																<i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a>
															</span>
															<span>
																<i class="fa fa-comments"></i> <a href="#">12 Comments</a>
															</span>
														</div>
													</div>
												</li>
												<li>
													<div class="tm-info">
														<div class="tm-icon"><i class="fa fa-video-camera"></i></div>
														<time class="tm-datetime" datetime="2013-09-08 11:26">
															<div class="tm-datetime-date">9 months ago.</div>
															<div class="tm-datetime-time">11:26 AM</div>
														</time>
													</div>
													<div class="tm-box appear-animation" data-appear-animation="fadeInRight">
														<p>
															Google Fonts gives you access to over 600 web fonts!
														</p>
														<div class="embed-responsive embed-responsive-16by9">
															<iframe class="embed-responsive-item" src="//player.vimeo.com/video/67957799"></iframe>
														</div>
														<div class="tm-meta">
															<span>
																<i class="fa fa-user"></i> By <a href="#">John Doe</a>
															</span>
															<span>
																<i class="fa fa-thumbs-up"></i> 122 Likes
															</span>
															<span>
																<i class="fa fa-comments"></i> <a href="#">3 Comments</a>
															</span>
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</section>
					</div>	
				</section>
@endsection
<!-- end: page -->

			