<?php require 'header.php'; ?>

<div class="container search">
	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		<?php include './inc/sidebar-search.php'; ?>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 search-top">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right search-header">
				<h1>Showing: 1 - 6 <span>of</span> 23 Results</h1>
			</div>
		</div>
		<div class="row search-content">
			<?php for ($i = 0; $i < 6; $i++) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-content-outer">
					<div class="row">
						<div class="search-content-item">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 search-content-title text-center">
								<img src="images/img.png" alt="" class="img-responsive">
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 search-content-des">
								<h1>Golden Beach Sunset</h1>
								<h3>lillyzanetti - Hudson, United States</h3>
								<div class="row">
									<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 search-content-des-left">
										<div>
											<p><strong>Florida beach at sunset with blues, gold, yellow and gray</strong></p>
											<p><strong>Available in :</strong> 8x10, 11x14, 16x20, 20x24, 20x36 (3), 20x30, 24x36, 24x48 (3), 36x48, 36x60 (3), 40x60 (3)</p>
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 search-content-des-right">									
										<p><span class="dolor1">$29</span><span class="dolor2"> $9</span> <span class="up">and<br> up</span></p>
										<p><a href="#"><img src="images/view_print.png" width="146" height="44" alt=""></a></p>
										<p class="flat-rate">$9.5 flat rate shipping. 
											Ships FREE with orders 
											over $150
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="pagination-area">
					<ul>
						<li><a href="#" class="btn btn-default" title="Page 1">1</a></li>
						<li><a href="#" class="btn btn-default" title="Page 2">2</a></li>
						<li><a href="#" class="btn btn-default" title="Page 3">3</a></li>
						<li><a href="#" class="btn btn-default">&raquo;</a></li>
						<li><a href="#" class="btn btn-default">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-bottom">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 search-bottom-left">
				<?php include './inc/featured-sliders.php'; ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 search-bottom-right">
				<div class="search-bottom-right-content">
					<h2>Ageless. Classy. Art. </h2>
					<img src="images/chair.jpg" alt=" " class="img-responsive">
					<p>Our gorgeous professional canvas prints represent the best of both modern and timeless aesthetics, and the fact the pictures are taken by passionate local photographers from all around the world makes them a great art investment for your walls. 
						Like the sunset, each piece is amazing in its own unique way and will be a focal point for conversation.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>