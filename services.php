<?php

include('includes/functions.php');

$data=getif("select * from `services` where `deleted_at` IS NULL");
print_r($data);

die;

include('includes/header.php');

?>


	<!-- Services -->
    <section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
							<div class="section-top">
								<h1><span>Creative</span><b>Service We Provide</b></h1><h4>We provide quality service &amp; support..</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>Aliquam Sodales Justo Sit Amet Urna Auctor Scelerisquinterdum Leo Anet Tempus Enim Esent Egetis Hendrerit Vel Nibh Vitae Ornar Sem Velit Aliquam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-business.html">Business Strategy</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-business.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-html5"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-develop.html">Web Development</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-develop.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-cube"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.html">Market Research</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-market.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-coffee"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-design.html">Trend Design</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-design.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-bullhorn"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-advertise.html">Simply Adertisement</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-advertise.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-bullseye"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-marketing.html">Digital Marketing</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-marketing.html"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				</div>


                <div class="row">
					<div class="col-12">
						<!-- Pagination -->
						<div class="pagination-plugin">
							<ul class="pagination-list">
								<li class="prev"><a href="#">Prev</a></li>
								<li class="page-numbers current"><a href="#">1</a></li>
								<li class="page-numbers "><a href="#">2</a></li>
								<li class="page-numbers"><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>

			</div>
	</section>
		<!--/ End Services -->











<?php
include('includes/footer.php');

?>