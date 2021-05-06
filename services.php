<?php

include('includes/functions.php');

$data=getif("select * from `services` where `deleted_at` IS NULL AND `status`='live'");


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

						<?php
							foreach ($data as $key => $row) {
								
								
								echo '<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Service -->
								<div class="single-service">
									<div class="service-head bg-danger ">
										<img class=" w-100"  src="admin/uploads/images/'.$row['image'].'" alt="#">
										<div class="icon-bg"><i class="fa '.$row['icon'].'"></i></div>
										
									</div>
									<div class="service-content">
										<h4><a href="service-single.php?service='.$row['id'].'">'.$row['title'].'</a></h4>
										<p>'.substr($row['description'],0,130).'...</p>
										<a class="btn" href="service-single.php?service='.$row['id'].'"><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
									</div>
								</div>
								<!--/ End Single Service -->
							</div>';


							}
						
						
						?>

				</div>

			<!-- Pagination -->
                <!-- <div class="row">
					<div class="col-12">
						
						<div class="pagination-plugin">
							<ul class="pagination-list">
								<li class="prev"><a href="#">Prev</a></li>
								<li class="page-numbers current"><a href="#">1</a></li>
								<li class="page-numbers "><a href="#">2</a></li>
								<li class="page-numbers"><a href="#">3</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
						
					</div>
				</div> -->

			</div>
	</section>
		<!--/ End Services -->











<?php
include('includes/footer.php');

?>