<!DOCTYPE html>
<html lang="zxx">

    <head>
		<meta charset="utf-8" />
		<meta name="author" content="Jobprep Academy" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta id="meta_description" name="description" content="Jobprep Academy">
		<meta name="robots" content="noindex,nofollow">
        <meta id="meta_tag" name="keywords" content="lembaga pelatihan kerja, lpk, jobprep academy, kursus pelatihan, kelas kursus, kursus digital marketing, jobprep.id, jobprep id">
        <title>@yield('title')</title>

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5XYKW1LDEE"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-5XYKW1LDEE');
        </script>

    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{ asset('assets/logo/jobprep-logo.png') }}" class="logo" alt="" width="75%;" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li class="account-drop">
										<a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="embos_45"><i class="fas fa-shopping-basket"></i><i class="embose_count">4</i></span>
										</a>
										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-purple">
												<h4>Wishlist Product</h4>
											</div>
											<div class="ground-list ground-hover-list">
												<div class="ground ground-list-single">
													<div class="grd_thum"><img src="assets/img/cr-1.jpg" class="img-fluid rounded" width="50" alt="" /></div>
													<div class="ground-content">
														<h6>Web History<small class="float-right text-fade">$120</small></h6>
														<a href="#" class="small text-danger">Remove</a>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="grd_thum"><img src="assets/img/cr-3.jpg" class="img-fluid rounded" width="50" alt="" /></div>
													<div class="ground-content">
														<h6>Physics Beginning<small class="float-right text-fade">$99</small></h6>
														<a href="#" class="small text-danger">Remove</a>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="grd_thum"><img src="assets/img/cr-4.jpg" class="img-fluid rounded" width="50" alt="" /></div>
													<div class="ground-content">
														<h6>Computer Fundamental<small class="float-right text-fade">$99</small></h6>
														<a href="#" class="small text-danger">Remove</a>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="grd_thum"><img src="assets/img/cr-5.jpg" class="img-fluid rounded" width="50" alt="" /></div>
													<div class="ground-content">
														<h6>Computer Advance<small class="float-right text-fade">$49</small></h6>
														<a href="#" class="small text-danger">Remove</a>
													</div>
												</div>

												<div class="ground ground-list-single">
													<button type="button" class="btn theme-bg text-white full-width">Go To Cart</button>
												</div>

											</div>
										</div>
									</li>
									<li class="account-drop">
										<a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="embos_45"><i class="fas fa-bell"></i><i class="embose_count red">3</i></span>
										</a>
										<div class="dropdown-menu pull-right animated flipInX">
											<div class="drp_menu_headr bg-warning">
												<h4>22 Notifications</h4>
											</div>
											<div class="ground-list ground-hover-list">
												<div class="ground ground-list-single">
													<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
														<div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
													</div>

													<div class="ground-content">
														<h6><a href="#">Maryam Amiri</a></h6>
														<small class="text-fade">New User Enrolled in Python</small>
														<span class="small">Just Now</span>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
														<div class="position-absolute text-danger h5 mb-0"><i class="fas fa-comments"></i></div>
													</div>

													<div class="ground-content">
														<h6><a href="#">Shilpa Rana</a></h6>
														<small class="text-fade">Shilpa Send a Message</small>
														<span class="small">02 Min Ago</span>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
														<div class="position-absolute text-info h5 mb-0"><i class="fas fa-grin-squint-tears"></i></div>
													</div>

													<div class="ground-content">
														<h6><a href="#">Amar Muskali</a></h6>
														<small class="text-fade">Need Responsive Business Tem...</small>
														<span class="small">10 Min Ago</span>
													</div>
												</div>

												<div class="ground ground-list-single">
													<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
														<div class="position-absolute text-purple h5 mb-0"><i class="fas fa-briefcase"></i></div>
													</div>

													<div class="ground-content">
														<h6><a href="#">Maryam Amiri</a></h6>
														<small class="text-fade">Next Meeting on Tuesday..</small>
														<span class="small">15 Min Ago</span>
													</div>
												</div>

											</div>
										</div>
									</li>

									<li>
										<a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12">
											<span class="embos_45"><i class="fas fa-sign-in-alt"></i></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">

                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li><a href="{{ url('tentang') }}">Tentang</a></li>

								<li><a href="#">Program<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Pelatihan<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="{{ url('program') }}">Virtual</a></li>
												<li><a href="grid-layout-with-sidebar-4.html">Executive Development Program</a></li>
												<li><a href="grid-layout-with-sidebar-5.html">In House Training</a></li>
												<li><a href="grid-layout-full.html">UMKM</a></li>
											</ul>
										</li>
										<li><a href="#">Consultant Center<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-with-sidebar.html">Pengembangan SDM</a></li>
												<li><a href="list-layout-with-full.html">Pendidikan</a></li>
												<li><a href="list-layout-with-full.html">Digital</a></li>
												<li><a href="list-layout-with-full.html">Asessment Perusahaan</a></li>
											</ul>
										</li>
										<li><a href="#">Kelas Kursus<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="course-detail.html">Digital Marketing</a></li>
												<li><a href="course-detail-2.html">IT & Software</a></li>
												<li><a href="course-detail-3.html">Akuntansi</a></li>
												<li><a href="course-detail-4.html">Perkantoran</a></li>
												<li><a href="course-detail-4.html">Desain Grafis</a></li>
												<li><a href="course-detail-4.html"><b>Lihat Lebih ...</b></a></li>
											</ul>
										</li>

										<li><a href="explore-category.html">Magang Perusahaan</a></li>
										<li><a href="find-instructor.html">Lamar Pekerjaan</a></li>
									</ul>
								</li>

								<li><a href="#">Sertifikasi BNSP<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Manajemen<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="{{ url('sertifikasi') }}">Pemasaran</a></li>
												<li><a href="shop-with-right-sidebar.html">Akuntansi</a></li>
												<li><a href="list-shop-with-sidebar.html">Sekretaris</a></li>
												<li><a href="wishlist.html">Sumber Daya Manusia</a></li>
												<li><a href="checkout.html">Operasional</a></li>
												<li><a href="product-detail.html">Pengadaan</a></li>
												<li><a href="product-detail.html">Produksi</a></li>
												<li><a href="product-detail.html">Umum</a></li>
											</ul>
										</li>
										<li><a href="#">Industri<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="shop-with-sidebar.html">Food & Beverage</a></li>
												<li><a href="shop-with-right-sidebar.html">Transportasi</a></li>
												<li><a href="list-shop-with-sidebar.html">Energi</a></li>
												<li><a href="wishlist.html">Teknologi</a></li>
												<li><a href="checkout.html">Logistik</a></li>
											</ul>
										</li>
										<li><a href="#">Perusahaan<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="shop-with-sidebar.html">Internal Audit</a></li>
												<li><a href="shop-with-right-sidebar.html">Human Capital</a></li>
												<li><a href="shop-with-right-sidebar.html">Kewirausahaan</a></li>
											</ul>
										</li>
										<li><a href="about.html">Kehumasan</a></li>
										<li><a href="contact.html">Alat Berat</a></li>
										<li><a href="blogs.html">UMKM</a></li>
										<li><a href="pricing.html">Perhotelan</a></li>
										<li><a href="404.html">Pariwisata</a></li>
										<li><a href="course-detail-4.html"><b>Lihat Lebih ...</b></a></li>
									</ul>
								</li>

								<li><a href="{{ url('event') }}">Event & Webinar</a></li>
                                <li><a herf="{{ url('prakerja') }}">Prakerja</a></li>

							</ul>

							<ul class="nav-menu nav-menu-social align-to-right">

								<li>
									<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Masuk</span>
									</a>
								</li>
								<li class="add-listing theme-bg">
									<a href="{{ url('prakerja') }}" class="text-white">Kartu Prakerja</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

			@yield('content')

			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">

							<div class="col-lg-5 col-md-5">
								<div class="footer_widget">
									<img src="assets/logo/jobprep-logo.png" class="img-footer small mb-4" alt="" />
									<h4 class="extream mb-3">Tanyakan lebih lanjut?</h4>
									<p>Hubungi kami via email untuk penjelasan Jobprep secara detail.</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Alamat Email">
											<div class="input-group-append">
												<button type="button" class="input-group-text theme-bg b-0 text-light">Kirim</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-7 ml-auto">
								<div class="row">

									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Program</h4>
											<ul class="footer-menu">
												<li><a href="#">Pelatihan</a></li>
												<li><a href="#">Konsultasi</a></li>
												<li><a href="#">Kelas Kursus</a></li>
												<li><a href="#">Magang</a></li>
												<li><a href="#">Lamar Kerja</a></li>
											</ul>
										</div>
									</div>

									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Sertifikasi BNSP</h4>
											<ul class="footer-menu">
												<li><a href="#">Manajemen <span class="new">Top</span></a></li>
												<li><a href="#">UMKM</a></li>
												<li><a href="#">Industri <span class="new">Top</span></a></li>
												<li><a href="#">Perhotelan</a></li>
												<li><a href="#">Pariwisata</a></li>
												<li><a href="#">Teknologi</a></li>
											</ul>
										</div>
									</div>

									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Event</h4>
											<ul class="footer-menu">
												<li><a href="#">Webinar Online</a></li>
												<li><a href="#">Event Offline</a></li>
											</ul>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2022 Jobprep Academy. Digital Platform <a href="https://instagram.com/jobprep.id"> LPK no. 1</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content overli" id="loginmodal">
						<div class="modal-header">
							<h5 class="modal-title">Login ke Jobprep Academy</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="login-form">
								<form>

									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>

									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>

									<!--<div class="form-group row">-->
									<!--	<div class="col-xl-4 col-lg-4 col-4">-->
									<!--		<input id="admin" class="checkbox-custom" name="admin" type="checkbox">-->
									<!--		<label for="admin" class="checkbox-custom-label">Admin</label>-->
									<!--	</div>-->
									<!--	<div class="col-xl-4 col-lg-4 col-4">-->
									<!--		<input id="student" class="checkbox-custom" name="student" type="checkbox" checked>-->
									<!--		<label for="student" class="checkbox-custom-label">Student</label>-->
									<!--	</div>-->
									<!--	<div class="col-xl-4 col-lg-4 col-4">-->
									<!--		<input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">-->
									<!--		<label for="instructor" class="checkbox-custom-label">Tutors</label>-->
									<!--	</div>-->
									<!--</div>-->

									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg text-white"><i class="fas fa-sign-in-alt mr-1"></i> Masuk</button>
									</div>

									<!--<div class="rcs_log_125 pt-2 pb-3">-->
									<!--	<span>Or Login with Social Info</span>-->
									<!--</div>-->
									<!--<div class="rcs_log_126 full">-->
									<!--	<ul class="social_log_45 row">-->
									<!--		<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>-->
									<!--		<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>-->
									<!--		<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>-->
									<!--	</ul>-->
									<!--</div>-->

								</form>
							</div>
						</div>
						<div class="crs_log__footer d-flex justify-content-between mt-0">
							<div class="fhg_45"><p class="musrt">Belum punya akun? <a href="{{ url('signup') }}" class="theme-cl">Daftar</a></p></div>
							<div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Lupa Password?</a></p></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.js"></script>
		<script src="assets/js/summernote.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/skillup-live/skillup/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 04:25:09 GMT -->
</html>
