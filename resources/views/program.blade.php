@extends('layout.app')

@section('title', 'Jobprep Academy | Program Pelatihan')

@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
			<div class="hero_banner image-cover" style="background:#03b97c url(assets/img/banner-3.jpg) no-repeat;" data-overlay="5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-7 col-md-8 col-sm-12">
							<div class="simple-search-wrap text-left">
								<div class="hero_search-2">
									<div class="elsio_tag">E - Learning Jobprep Academy</div>
									<h1 class="banner_title mb-4">Pelajari Puluhan Skill Populer dan Bersetifikat</h1>
									<p class="font-lg mb-4">
									    Lebih dari sekadar nonton rekaman. Belajar mandiri secara terstruktur via Video Materi, Modul Praktik, sekaligus Webinar Series bareng experts tiap bulan.
									</p>
									<div class="input-group simple_search">
										<i class="fa fa-search ico"></i>
										<input type="text" class="form-control" placeholder="Cari Materi Pelatihan">
										<div class="input-group-append">
											<button class="btn theme-bg" type="button">Cari</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- ============================ Hero Banner End ================================== -->
	
	<!-- ============================ All Cources ================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
					
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar p-0">
								<a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i class="fa fa-sliders-h ml-2"></i></a>							
								<div class="collapse" id="fltbox">
									<!-- Find New Property -->
									<div class="sidebar-widgets p-4">
										
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Search Your Cources">
												<i class="ti-search"></i>
											</div>
										</div>
										
										<div class="form-group">
											<div class="simple-input">
												<select id="cates" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">IT & Software</option>
													<option value="2">Banking</option>
													<option value="3">Medical</option>
													<option value="4">Insurence</option>
													<option value="5">Finance & Accounting</option>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<h6>Top Instructor</h6>
											<ul class="no-ul-list mb-3">
												<li>
													<input id="aa-41" class="checkbox-custom" name="aa-41" type="checkbox">
													<label for="aa-41" class="checkbox-custom-label">Bela Bima<i class="count">12</i></label>
												</li>
												<li>
													<input id="aa-2" class="checkbox-custom" name="aa-2" type="checkbox">
													<label for="aa-2" class="checkbox-custom-label">Hinata Hyuga<i class="count">10</i></label>
												</li>
												<li>
													<input id="aa-3" class="checkbox-custom" name="aa-3" type="checkbox">
													<label for="aa-3" class="checkbox-custom-label">Mike hussy<i class="count">56</i></label>
												</li>
												<li>
													<input id="aa-71" class="checkbox-custom" name="aa-71" type="checkbox">
													<label for="aa-71" class="checkbox-custom-label">Adam Riky <i class="count">42</i></label>
												</li>
												<li>
													<input id="aa-81" class="checkbox-custom" name="aa-81" type="checkbox">
													<label for="aa-81" class="checkbox-custom-label">Dev Patel<i class="count">12</i></label>
												</li>
												<li>
													<input id="aa-91" class="checkbox-custom" name="aa-91" type="checkbox">
													<label for="aa-91" class="checkbox-custom-label">Mike Hussy<i class="count">36</i></label>
												</li>
											</ul>
										</div>
										
										<div class="form-group">
											<h6>Skill Level</h6>
											<ul class="no-ul-list mb-3">
												<li>
													<input id="l1" class="checkbox-custom" name="l1" type="checkbox">
													<label for="l1" class="checkbox-custom-label">Beginning</label>
												</li>
												<li>
													<input id="l2" class="checkbox-custom" name="l2" type="checkbox">
													<label for="l2" class="checkbox-custom-label">Basic Level</label>
												</li>
												<li>
													<input id="l3" class="checkbox-custom" name="l3" type="checkbox">
													<label for="l3" class="checkbox-custom-label">Iner Level</label>
												</li>
												<li>
													<input id="l4" class="checkbox-custom" name="l4" type="checkbox">
													<label for="l4" class="checkbox-custom-label">Advance</label>
												</li>
											</ul>
										</div>
										
										<div class="form-group">
											<h6>Price</h6>
											<ul class="no-ul-list mb-3">
												<li>
													<input id="p1" class="checkbox-custom" name="p1" type="checkbox">
													<label for="p1" class="checkbox-custom-label">All<i class="count">89</i></label>
												</li>
												<li>
													<input id="p2" class="checkbox-custom" name="p2" type="checkbox">
													<label for="p2" class="checkbox-custom-label">Free<i class="count">56</i></label>
												</li>
												<li>
													<input id="p3" class="checkbox-custom" name="p3" type="checkbox">
													<label for="p3" class="checkbox-custom-label">Paid<i class="count">42</i></label>
												</li>
											</ul>
										</div>
										
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 pt-4">
												<button class="btn theme-bg rounded full-width">Apply Filter</button>
											</div>
										</div>
									
									</div>
								</div>
							</div>
							<!-- Sidebar End -->
							
						</div>
						
						<!-- Content -->
						<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="short_wraping">
										<div class="row m-0 align-items-center justify-content-between">
										
											<div class="col-lg-4 col-md-5 col-sm-12  col-sm-6">
												<div class="shorting_pagination_laft">
													<h6 class="m-0">Showing 1-25 of 72</h6>
												</div>
											</div>
									
											<div class="col-lg-8 col-md-7 col-sm-12 col-sm-6">
												<div class="dlks_152">
													<div class="shorting-right mr-2">
														<label>Short By:</label>
														<div class="dropdown show">
															<a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="selection">Most Rated</span>
															</a>
															<div class="drp-select dropdown-menu">
																<a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
																<a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
																<a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
																<a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
															</div>
														</div>
													</div>
													<div class="lmk_485">
														<ul class="shorting_grid">
															<li class="list-inline-item"><a href="grid-layout-with-sidebar.html" class="active"><span class="ti-layout-grid2"></span></a></li>
															<li class="list-inline-item"><a href="list-layout-with-sidebar.html"><span class="ti-view-list"></span></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="row justify-content-center">
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">	
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-2.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_6"><span>Development</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">149</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Basic knowledge about hodiernal bharat in history</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>02 hr 05 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>17 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-6.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-3.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_5"><span>Finance</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">99</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Advance PHP knowledge with laravel to make smart web</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>02 hr 47 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>32 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-5.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-4.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_4"><span>Banking</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">49</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete accounting & bank financial course 2021</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>04 hr 10 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>40 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-4.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-5.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_3"><span>Business</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">129</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">The complete business plan course includes 50 templates</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>06 hr 07 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>35 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-3.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-6.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_2"><span>Physics</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">399</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Full web designing course with 20 web template designing</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>03 hr 10 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>19 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-2.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="crs_grid shadow_none brd">
										<div class="crs_grid_thumb">
											<a href="course-detail.html" class="crs_detail_link">
												<img src="assets/img/cr-7.jpg" class="img-fluid rounded" alt="" />
											</a>
											<div class="crs_video_ico">
												<i class="fa fa-play"></i>
											</div>
											<div class="crs_locked_ico">
												<i class="fa fa-lock"></i>
											</div>
										</div>
										<div class="crs_grid_caption">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_cates cl_1"><span>Design</span></div>
												</div>
												<div class="crs_fl_last">
													<div class="crs_price"><h2><span class="currency">$</span><span class="theme-cl">89</span></h2></div>
												</div>
											</div>
											<div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">Sociology Optional: Test Series for UPSC CSE Mains (2021 & 2022)</a></h4></div>
											<div class="crs_info_detail">
												<ul>
													<li><i class="fa fa-clock text-danger"></i><span>06 hr 07 min</span></li>
													<li><i class="fa fa-video text-success"></i><span>27 Lectures</span></li>
												</ul>
											</div>
											<div class="preview_crs_info">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width:35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="crs_grid_foot">
											<div class="crs_flex">
												<div class="crs_fl_first">
													<div class="crs_tutor">
														<div class="crs_tutor_thumb"><a href="instructor-detail.html"><img src="assets/img/user-1.jpg" class="img-fluid circle" alt="" /></a></div>
													</div>
												</div>
												<div class="crs_fl_last">
													<div class="foot_list_info">
														<ul>
															<li><div class="elsio_ic"><i class="fa fa-user text-danger"></i></div><div class="elsio_tx">4.7k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-eye text-success"></i></div><div class="elsio_tx">42.4k</div></li>
															<li><div class="elsio_ic"><i class="fa fa-star text-warning"></i></div><div class="elsio_tx">4.7</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						
							</div>
							
							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination p-center">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span class="ti-arrow-left"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">18</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span class="ti-arrow-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					
					</div>
				</div>
			</section>
			<!-- ============================ All Cources ================================== -->
@endsection