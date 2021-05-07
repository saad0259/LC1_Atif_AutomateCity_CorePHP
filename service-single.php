<?php
include('includes/functions.php');

	function redirect_to_services()
	{
		header("Location: services.php");
	}

if ($_SERVER['REQUEST_METHOD'] == 'GET'){


	if(isset($_GET['service']))
	{

		if($row=getDataByProp('services','id',$_GET['service'])){

			if($row['status']=='live' && $row['deleted_at']==NULL)
			{
				
			}

			else{
				redirect_to_services();
			}
		}
		else{
			redirect_to_services();
		}
		
	}
	else{
		redirect_to_services();
	}

}
else{
	redirect_to_services();
}



include('includes/header.php');

?>


	<!-- Blog Single -->
    <section class="news-area archive blog-single section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
						<div class="row">
							<div class="col-12">
								<div class="blog-single-main">
									
									<div class="blog-detail">
										<!-- News meta -->
										<ul class="news-meta">
											<li><i class="fa fa-user"></i><?php echo $row['offered_by'] ?></li>
											<li><i class="fa fa-pencil"></i><?php echo $row['date'] ?></li>
											<li><i class="fa fa-dollar"></i><?php echo $row['purchases'] ?> Purchases</li>
											<li><i class="fa fa-dollar"></i><?php echo $row['purchases'] ?> Purchases</li>
										</ul>
										<h2 class="blog-title"><?php echo $row['title'] ?></h2>
										<p>
											<?php echo $row['description'] ?>
										</p>
										<div class="row blog-space">
											<div class="col-lg-6">
												<img src="admin/uploads/images/<?php echo $row['image']?>" alt="#">
											</div>
											<div class="col-lg-6">
												<!-- <h5>Features</h5>
												<ul>
													<li>We’re creative thinker</li>
													<li>We give you free consulting service</li>
													<li>Included top level domain every package</li>
													<li>Great way to represent your business</li>
													<li>99% Server Up-time guarantee</li>
													<li>24/7 Lifetime service</li>
													<li>We give you free consulting service</li>
													<li>Included top level domain every package</li>
                                                    
                                                    
												</ul>

                                                <h5>Prerequisites</h5>
												<ul>
													<li>We’re creative thinker</li>
													<li>We give you free consulting service</li>
													<li>Included top level domain every package</li>
													<li>Great way to represent your business</li>
                                                    
												</ul> -->


                                                <div class="button my-4"><a href="#" class="bizwheel-btn "><i class="fa fa-dollar"></i> Buy for <?php echo $row['price']." ".$row['currency'] ?></a></div>
                                                <div class="button my-4"><a href="https://api.whatsapp.com/send/?phone=+923056558626&text&app_absent=0&text=Hello there, i wanted to know more about <?php echo $row['title']?>" class="bizwheel-btn theme-2 effect "><i class="fa fa-user"></i> Discuss More</a></div>

											</div>
										</div>
							
										
									</div>
								</div>
							</div>
						</div>
												
					</div>		
				</div>
			</div>
		</section>	
		<!--/ End Services -->
		









<?php
include('includes/footer.php');

?>
