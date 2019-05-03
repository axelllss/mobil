<?php $this->load->view('public/partials/view_public_header.php'); ?>
<div class="banner">
	<div class="container" style="background-image: url("assets/images/baru.jpg")">
		<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
		namespace: "callbacks",
		pager: true,
		});
		});
		</script>
		<div id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
					</div>
					
				</li>
				<li>
					
					<div class="banner-text">
						
					</div>
					
				</li>
				<li>
					<div class="banner-text">
						
					</div>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!--content-->
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top">
				<h1>NEW PRODUCTS</h1>
				
				<div class="grid-in">
					{vehicles}
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="<?= base_url(); ?>pages/show/{vehicle_id}" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?= base_url('uploads/'); ?>/{image}" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
									<span>{model_name}</span>
									
									</h3>
								</div>
							</a>
							
							<p><a href="single.html">{model_name}</a></p>
						</div>
					{/vehicles}
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<?php $this->load->view('public/partials/view_public_footer.php'); ?>