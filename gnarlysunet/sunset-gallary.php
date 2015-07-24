<?php require 'header.php'; ?>

<div class="container sunset-gallary">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sunset-gallary-top">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sunset-gallary-top-offer">
				<img src="images/offr.gif" alt="" title="" class="img-responsive">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sunset-gallary-top-search">
				<div class="sunset-gallary-search">
					<div class="row">
						<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 search-text">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search specific product section"/>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 search-button">
							<div class="form-group">
								<input type="button" class="btn" value="search now" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="css/banner.css"/>
	<script type="text/javascript" src="js/mootools-1.2.1-core.js"></script>
	<script type="text/javascript" src="js/mootools-1.2-more.js"></script>
	<script type="text/javascript" src="js/lofslidernews.mt12.js"></script>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sunset-gallary-slider hidden-xs hidden-sm">
		<div class="row"><div id="lofslidecontent45" class="lof-slidecontent">
				<div class="preload" style="visibility: hidden; zoom: 1; opacity: 0;"><div></div></div>
				<!-- MAIN CONTENT --> 
				<div class="lof-main-wapper col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="lof-main-item" ><a href="#"><img src="images/slide.jpg" alt="" title="" class="img-responsive"></a>  </div>
					<div class="lof-main-item" ><a href="#"><img src="images/slide2.jpg" alt="" title="" class="img-responsive"></a>  </div> 
					<div class="lof-main-item" ><a href="#"><img src="images/slide3.jpg" alt="" title="" class="img-responsive"></a>  </div> 
					<div class="lof-main-item" ><a href="#"><img src="images/slide4.jpg" alt="" title="" class="img-responsive"></a>  </div> 
					<div class="lof-main-item" ><a href="#"><img src="images/slide5.jpg" alt="" title="" class="img-responsive"></a>  </div> 
					<div class="lof-main-item" ><a href="#"><img src="images/gallery-banner.jpg" alt="" title="" class="img-responsive"></a>  </div> 

				</div>
				<!-- END MAIN CONTENT -->  
				<!-- NAVIGATOR -->

				<div class="lof-navigator-outer col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<ul class="lof-navigator" style="top: 0px;">

						<li class=""><h3 class="pink_clor">Canvases</h3></li>
						<li class="active"><h3 class="pink_clor">Triptychs</h3></li>
						<li class=""><h3 class="pink_clor">Photo Prints</h3></li>
						<li class=""><h3 class="pink_clor">Photographers</h3></li>    
						<li class=""><h3 class="pink_clor">Shop by Location</h3></li>
						<li class=""><h3 class="pink_clor">Shop All</h3></li>
					</ul>
				</div>
			</div></div>
	</div>
	<script type="text/javascript">
		var _lofmain = $('lofslidecontent45');
		var _lofscmain = _lofmain.getElement('.lof-main-wapper');
		var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
		var object = new LofFlashContent(_lofscmain,
				_lofnavigator,
				_lofmain.getElement('.lof-navigator-outer'),
				{fxObject: {transition: Fx.Transitions.Quad.easeInOut, duration: 800},
					interval: 3000,
					direction: 'hrleft'});
		object.start(true, _lofmain.getElement('.preload'));
	</script>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sunset-gallary-middle">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="sunset-gallary-middle-box">
					<h1>Art for the Home</h1>
					<p><img src="images/gs_sunset_gallary_061213-1.jpg" alt="" title="" class="img-responsive"></p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="sunset-gallary-middle-box">
					<h1>&nbsp;</h1>
					<p><img src="images/gs_sunset_gallary_061213-2.jpg" class="img-responsive" alt="" title=""></p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/as.js"></script>	

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
				<div class="sunset-gallary-middle-box">
					<h1>BEST SELLERS</h1>
					<div class="middle-slider">
						<div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
						<div id="slider" style="overflow: hidden;">
							<ul>
								<li><img src="images/gs_sunset_gallary_061213-slide1.jpg" width="500" height="140" alt="Image One" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide2.jpg" width="500" height="140" alt="Image Two" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide1.jpg" width="500" height="140" alt="Image Three" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide2.jpg" width="500" height="140" alt="Image Four" class="img-responsive"></li>
							</ul>
						</div>
						<div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
						<ul id="pagination" class="">
							<li onclick="slideshow.pos(0)" class=""></li>
							<li onclick="slideshow.pos(1)" class="current"></li>
							<li onclick="slideshow.pos(2)" class=""></li>
							<li onclick="slideshow.pos(3)" class=""></li>
						</ul>
						<div class="clr"></div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>

			<script type="text/javascript">
				var slideshow = new TINY.slider.slide('slideshow', {
					id: 'slider',
					auto: 4,
					resume: false,
					vertical: false,
					navid: 'pagination',
					activeclass: 'current',
					position: 0,
					rewind: false,
					elastic: true,
					left: 'slideleft',
					right: 'slideright'
				});
			</script>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
				<div class="sunset-gallary-middle-box">
					<h1>NEW RELEASES</h1>
					<div class="middle-slider">
						<div class="sliderbutton2" id="slideleft2" onclick="slideshow2.move(-1)"></div>
						<div id="slider2" style="overflow: hidden;">
							<ul>
								<li><img src="images/gs_sunset_gallary_061213-slide1.jpg" width="500" height="140" alt="Image One" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide2.jpg" width="500" height="140" alt="Image Two" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide1.jpg" width="500" height="140" alt="Image Three" class="img-responsive"></li>
								<li><img src="images/gs_sunset_gallary_061213-slide2.jpg" width="500" height="140" alt="Image Four" class="img-responsive"></li>
							</ul>
						</div>
						<div class="sliderbutton2" id="slideright2" onclick="slideshow2.move(1)"></div>
						<ul id="pagination2" class="">
							<li onclick="slideshow2.pos(0)"></li>
							<li onclick="slideshow2.pos(1)"></li>
							<li onclick="slideshow2.pos(2)"></li>
							<li onclick="slideshow2.pos(3)"></li>
						</ul>
						<div class="clr"></div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>

			<script type="text/javascript">
				var slideshow2 = new TINY2.slider2.slide2('slideshow2', {
					id: 'slider2',
					auto: 4,
					resume: false,
					vertical: false,
					navid: 'pagination',
					activeclass: 'current',
					position: 0,
					rewind: false,
					elastic: true,
					left: 'slideleft2',
					right: 'slideright2'
				});
			</script>

		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="sunset-gallary-middle-box">
					<h1>COLLECTIONS</h1>
					<p><img src="images/gs_sunset_gallary_061213-3.jpg" class="img-responsive" alt="" title=""></p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="sunset-gallary-middle-box">
					<h1>SUBJECTS</h1>
					<p><img src="images/gs_sunset_gallary_061213-4.jpg" class="img-responsive" alt="" title=""></p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<p class="bottom-border"></p>
				</div>
			</div>
		</div>


		<script type="text/javascript">
			jQuery(function() {
				jQuery("#amazon_scroller2").amazon_scroller({
					scroller_title_show: 'disable',
					scroller_time_interval: '3000',
					scroller_window_background_color: "#e1e1e1",
					scroller_window_padding: '0',
					scroller_border_size: '0',
					scroller_border_color: '#CCC',
					scroller_background_color: "#f9f9f9",
					scroller_images_width: '189',
					scroller_images_height: '189',
					scroller_title_size: '12',
					scroller_title_color: 'black',
					scroller_show_count: '5',
					directory: 'images'
				});


			});
        </script>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sunset-gallary-bottom">
				<h1>BROWSE OUR TOP PHOTOGRAPHERS</h1>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sunset-gallary-bottom hidden-md hidden-sm hidden-xs">
				<div id="amazon_scroller2" class="amazon_scroller" style="border: 0px solid rgb(204, 204, 204); padding: 0px; background-color: rgb(225, 225, 225); width: 100%; height: 310px; position: relative;">

					<div class="amazon_scroller_mask" style="width: 788px !important; height: 310px;">
						<ul style="width: 788px; position: absolute; left: -199px;">
							<li style="width: 189px; display: block;"><a href="#" title="title1" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-1.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
							<li style="width: 189px; display: block;"><a href="#" title="title2" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-2.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
							<li style="width: 189px; display: block;"><a href="#" title="title2" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-3.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>

							<li style="width: 189px; display: block;"><a href="#" title="title3" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-4.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>												               <div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
						</ul>
						<ul style="width: 788px; position: absolute; left: 589px;">
							<li style="width: 189px; display: block;"><a href="#" title="title1" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-1.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
							<li style="width: 189px; display: block;"><a href="#" title="title2" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-2.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
							<li style="width: 189px; display: block;"><a href="#" title="title2" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-3.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>
								<div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>

							<li style="width: 189px; display: block;"><a href="#" title="title3" style="color: rgb(0, 0, 0); font-size: 12px;"><img src="images/gs_sunset_gallary_061213-crousal-4.jpg" alt="title" width="201" height="97" style="border: 0px; width: 189px; height: 189px;"></a>												               <div class="black_bg p5 white_colr">Near Townsend, United States  Smokey Mountain Sunrise <p class="pt5 gray_colr">Photographer: <span class="ylow_colr b">phil dill will</span></p></div>
							</li>
						</ul></div>

					<ul class="amazon_scroller_nav" style="top: 105px; width: 1000px;">
						<li style="width: 21px; height: 40px; background-image: url(images/arrow.gif); left: 0px; background-position: 0% 0%; background-repeat: no-repeat no-repeat;"></li>
						<li style="width: 21px; height: 40px; background-image: url(images/arrow.gif); right: 0px; background-position: 100% 0%; background-repeat: no-repeat no-repeat;"></li>
					</ul>
					<div style="clear: both"></div>
				</div>
			</div>			
		</div>

	</div>


</div>

<?php require 'footer.php'; ?>