<script type="text/javascript" src="js/jscript_xjquery_002.js"></script>
<script type="text/javascript" src="js/jscript_zjcarousellite.js"></script>
<script type="text/javascript" src="js/jscript_zjquery.js"></script>

<script type="text/javascript">
	$(function() {
		$(".carousel").jCarouselLite({
			btnNext: ".next",
			btnPrev: ".prev"
		});
		$(".carousel2").jCarouselLite2({
			btnNext: ".next2",
			btnPrev: ".prev2"
		});
	});
</script>


<div class="row carousel-box">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel-box-title">
		<h2>
			Featured Sunsets
			<a href="#" class="prev"></a>
			<a href="#" class="next"></a>
		</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel-box-content">
		<div class="carousel">							
			<ul>
				<?php for ($i = 0; $i < 4; $i++) { ?>
					<li class="product-col">
						<div class="carousel-image-box">
							<div class="img"><a href=""><img src="images/mark1.jpg" width="225" alt="" title="" /></a></div>
							<div class="prod-info">
								<div class="pro_txt">Near Townsend, United States
									Smokey Mountain Sunrise </div>
								<div class="name phi"><span>Photographer:</span> phil dill will </div>
							</div>
						</div>
						<div class="carousel-image-box">
							<div class="img"><a href=""><img src="images/mark1.jpg" width="225" alt="" title="" /></a></div>
							<div class="prod-info">
								<div class="pro_txt">Near Townsend, United States
									Smokey Mountain Sunrise </div>
								<div class="name phi"><span>Photographer:</span> phil dill will </div>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<!-- *********************************** -->
<div class="row carousel-box">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel-box-title">
		<h2>
			Featured Sunset & Sunrise Photographers<a href="#"> View all</a>
			<a href="#" class="prev2"></a>
			<a href="#" class="next2"></a>
		</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel-box-content">
		<div class="carousel2">							
			<ul>
				<?php for ($i = 0; $i < 5; $i++) { ?>
					<li class="product-col">
						<div class="carousel-image-box">
							<div class="img"><a href=""><img src="images/fea.jpg" alt="" title="" class="img-responsive"/></a></div>
							<div class="prod-info">
								<div class="pro_txt"><a href="">Lorem Ipsum</a></div>
							</div>
						</div>
					</li>									
				<?php } ?>
			</ul>
		</div>
	</div>
</div>