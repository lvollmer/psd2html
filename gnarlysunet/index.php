<?php require 'header.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.home-popUp').delay(750).animate({bottom: '0px'}, 750);
        $('.home-popUpClose').click(function() {
            $('.home-popUp').animate({bottom: '-400px'}, 1000);
            return false;
        });
    });
</script>

<div class="container">
    <div class="row home-content1">
        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">

            <div id="carousel-example-generic" class="slider-area carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slider1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>SUNSET OF THE DAY</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elite</span> <a href="#" title="Buy now" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>SUNSET OF THE DAY</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elite</span> <a href="#" title="Buy now" class="btn-buy">Buy Now</a> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>SUNSET OF THE DAY</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elite</span> <a href="#" title="Buy now" class="btn-buy">Buy Now</a> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>SUNSET OF THE DAY</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elite</span> <a href="#" title="Buy now" class="btn-buy">Buy Now</a> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <div class="tab-area">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#photos" data-toggle="tab">Photos</a></li>
                    <li><a href="#photographers" data-toggle="tab">Photographers</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="photos">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a href="#" title="photo"><img src="images/photo.jpg" class="thumbnail img-responsive" alt=" " width="103" height="72" /></a>
                            </div> 
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elitellentes orttitor... <a href="#" title="view more">view more.</a></p>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a href="#" title="photo"><img src="images/gs_main_photo.jpg" class="thumbnail img-responsive" alt=" " width="103" height="72" /></a>
                            </div> 
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elitellentes orttitor... <a href="#" title="view more">view more.</a></p>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-right view">
                                <a href="#" title="view more" class="">View all photos..</a>
                            </div> 
                        </div>
                    </div>

                    <div class="tab-pane" id="photographers">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a href="#" title="photo"><img src="images/photographer.jpg" class="thumbnail img-responsive" alt=" " width="103" height="72" /></a>
                            </div> 
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elitellentes orttitor... <a href="#" title="view more">view more.</a></p>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a href="#" title="photo"><img src="images/photographer.jpg" class="thumbnail img-responsive" alt=" " width="103" height="72" /></a>
                            </div> 
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elitellentes orttitor... <a href="#" title="view more">view more.</a></p>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right view">
                                <a href="#" title="view more" class="">View all photographers..</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="row home-content2">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="tiles">
                <div class="title-tab col-lg-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#sunrise" data-toggle="tab">Sunrise</a></li>
                        <li><a href="#sunset" data-toggle="tab">Sunset</a></li>
                    </ul>
                </div>

                <div class="tiles-content">
                    <div class="line1 col-lg-12">
                        <div class="row tab-content">                            
                            <div class="tab-pane active" id="sunrise">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="images/g.jpg" class="thumbnail img-responsive" alt=" " />
                                </div>
                                <div class="details col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h5>Your sunrise:</h5>
                                    <h6>Mar 5, 2013</h6>
                                    <p>Sunrise: 6:20 AM</p>
                                    <p>Sunset:<span> 5:57 PM</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="sunset">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <img src="images/g.jpg" class="thumbnail img-responsive" alt=" " />
                                </div>
                                <div class="details col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h5>Your sunrise:</h5>
                                    <h6>Mar 10, 2014</h6>
                                    <p>Sunrise: 8:20 AM</p>
                                    <p>Sunset:<span> 6:57 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line2 col-lg-12">
                        <div class="dotted">
                            <div class="row">                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">Time Zone Map</a>
                                    <a href="">Time Announcer</a>
                                    <a href="">Time Zone Converter</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                
                                    <a href="">Time Zone</a>                                
                                    <a href="">Abbreviations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line3 col-lg-12">
                        <ul>
                            <li>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, cons ectetur cing eliente stitor... <a href="#" title="view">view more.</a></p>
                            </li>
                        </ul>                        
                    </div>
                </div>              
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="tiles">
                <div class="title col-lg-12">
                    <h3>Time <a href="">Set home location</a></h3>
                </div>

                <div class="tiles-content">
                    <div class="line1 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img src="images/clock.jpg" class="img-responsive" alt=" " width="93" height="97" />
                            </div>
                            <div class="details col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <h5>Your current date &amp; time:</h5>
                                <h6>12:14 PM</h6>
                                <p><b>Monday Mar 4, 2013 Oxnard,</b>U.S.A. - California</p>
                            </div>
                        </div>
                    </div>

                    <div class="line2 col-lg-12">
                        <div class="dotted">
                            <div class="row">                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">Time Zone Map</a>
                                    <a href="">Time Announcer</a>
                                    <a href="">Time Zone Converter</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                
                                    <a href="">Time Zone</a>                                
                                    <a href="">Abbreviations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line3 col-lg-12">
                        <ul>
                            <li>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, cons ectetur cing eliente stitor... <a href="#" title="view">view more.</a></p>
                            </li>
                        </ul> 
                    </div>
                </div> 
            </div>  
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="tiles">
                <div class="title col-lg-12">
                    <h3>Weather</h3>
                </div>

                <div class="tiles-content">
                    <div class="line1 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img src="images/wather.jpg" class="img-responsive" alt=" " width="93" height="97" />
                            </div>
                            <div class="details col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <h5>Your current weather:</h5>
                                <h6>Overcast. Cool. 53 &deg;F.</h6>
                                <p><b>Monday Mar 4, 2013</b> Oxnard, U.S.A. - California</p>
                            </div>
                        </div>
                    </div>

                    <div class="line2 col-lg-12">
                        <div class="dotted">
                            <div class="row">                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="">Time Zone Map</a>
                                    <a href="">Time Announcer</a>
                                    <a href="">Time Zone Converter</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                
                                    <a href="">Time Zone</a>                                
                                    <a href="">Abbreviations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="line3 col-lg-12">
                        <ul>
                            <li>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>Lorem ipsum dolor sit amet, cons ectetur cing eliente stitor... <a href="#" title="view">view more.</a></p>
                            </li>
                        </ul> 
                    </div>
                </div>  
            </div>  
        </div>
    </div>

</div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="home-popUp-area hidden-xs">
    <div class="container home-popUp">
        <div class="row">
            <div class="col-lg-10 col-md-9 col-sm-8">
                <h2><span>40% OFF</span> New Fade-Resistant Canvases</h2>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <a href="#" class="home-popUpClose">Click to close <span class="glyphicon glyphicon-remove-circle"></span></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7">
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li>1000's of Photos from 150+ Countries</li>
                            <li>Over 1000 Talented Photographers!</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>Gallery Grade Fade-Resistant Canvases</li>
                            <li>Many Wall Art Styles and Sizes!</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5">
                <a href="#" class="btn-edit" role="button">View Gallery</a>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a href="#"><img src="images/img_pop_up1.png" class="thumbnail img-responsive" /></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a href="#"><img src="images/img_pop_up2.png" class="thumbnail img-responsive"  /></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a href="#"><img src="images/img_pop_up3.png" class="thumbnail img-responsive"  /></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a href="#"><img src="images/img_pop_up4.png" class="thumbnail img-responsive"  /></a>
                    </div>
                </div>
            </div>
            <div class="free-shipping col-lg-4 col-md-4 col-sm-2">
                <img src="images/free-ship-logo.png" class="img-responsive" />
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>

