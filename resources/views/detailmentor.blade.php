@extends('layout.app')

@section('title', 'Detail Instruktur')

@section('content')

    <body>

        <style>
            .content {
                display: none;
            }
            .read-more {
                display: inline-block;
                cursor: pointer;
                color: blue;
                text-decoration: underline;
            }
        </style>
			<!-- Top header  -->
			<!-- ============================================================== -->

			<!-- ============================ Page Title Start================================== -->
			<div class="ed_detail_head">
				<div class="container">
					<div class="row align-items-center mb-5">
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="authi_125">
								<div class="authi_125_thumb">
									<img src="assets/img/t-2.png" class="img-fluid rounded" alt="" />
								</div>
							</div>
						</div>

						<div class="col-lg-9 col-md-12 col-sm-12">
							<div class="dlkio_452">
								<div class="ed_detail_wrap">
									<div class="crs_cates cl_1"><span>Web Design</span></div><div class="crs_cates cl_3"><span>PHP</span></div>
									<div class="ed_header_caption">
										<h2 class="ed_title">{{ $detailMentor->nama_user }}</h2>
										<ul>
											<li><i class="ti-calendar"></i>10 - 20 weeks</li>
											<li><i class="ti-control-forward"></i>102 Lectures</li>
											<li><i class="ti-user"></i>502 Student Enrolled</li>
										</ul>
									</div>
									<div class="ed_header_short">
										<p>{{ $detailMentor->deskripsi }} <a href="#" class="theme-cl read-more">Read More..</a>.</p>
                                        <div class="content">
                                           <p> hallo ini adalah kelas read more </p>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function(){
                $('.read-more').click(function(e){
                    e.preventDefault();
                $(this).closest('.ed_header_short').find('.content').slideToggle();
                $(this).hide(); // Menyembunyikan "Read More" setelah di-klik
                });
            });
		</script>
	</body>

@endsection
