<?php require 'header.php'; ?>

<div class="container">
    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 prod-content">
            <img src="images/offr.gif" class="img-responsive" width="100%" alt="">

            <div class="slider">     
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/bannr1.jpg" alt="...">
                        </div>
                        <div class="item ">
                            <img src="images/bannr1.jpg" alt="...">
                        </div>
                        <div class="item ">
                            <img src="images/bannr1.jpg" alt="...">
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
            </div>

            <div class="row social-bank">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-4"><a href=""><img src="images/fbicon.png" width="30" height="32" alt="" /></a></div>
                        <div class="col-lg-4"><a href=""><img src="images/twitter.png" width="30" height="32" alt="" /></a></div>
                        <div class="col-lg-4"><a href=""><img src="images/printrest.png" width="30" height="32" alt="" /></a></div>
                    </div>
                </div>
                <div class="col-lg-2 satification"><a href=""><img src="images/satification.png" width="48" height="47" alt="" /></a></div>
                <div class="col-lg-6">
                    <div class="col-lg-3"><a href=""><img src="images/visa.jpg" width="53" height="40" alt="" /></a></div>
                    <div class="col-lg-3"><a href=""><img src="images/mastercard.jpg" width="53" height="40" alt="" /></a></div>
                    <div class="col-lg-3"><a href=""><img src="images/americanexpress.jpg" width="53" height="40" alt="" /></a></div>
                    <div class="col-lg-3"><a href=""><img src="images/discover.jpg" width="53" height="40" alt="" /></a></div>
                </div>
            </div>

            <div class="sunsetcontent">
                <h2>sunset through banyan tree</h2>
                <h5>by rupaghosh</h5>

                <br />
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Location: </th>
                            <td>(click the links to see all photos for each location)</td>
                        </tr>
                        <tr>
                            <th>Country: </th>
                            <td>India Sunsets</td>
                        </tr>
                        <tr>
                            <th>State/Region: </th>
                            <td>bihar Sunsets</td>
                        </tr>
                        <tr>
                            <th>City: </th>
                            <td>patna Sunsets</td>
                        </tr>
                        <tr>
                            <th>Tags: </th>
                            <td><span>tree, rest, shade, sunray, banyan, care, mother</span></td>
                        </tr>
                    </table>
                </div>
                <br />

                <span class="border2"></span>
                
                <br /><br />
                <div class="tab-area">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">About This Photo</a></li>
                        <li><a href="#profile" data-toggle="tab">About This Photographer</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <img src="images/imge.jpg" class="img-responsive thumbnail" width="114" height="114" alt="" />

                            <h3>rupaghosh<br />
                                Description from the Photographer
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>
                            <p class="clearfix">&nbsp;</p>
                        </div>
                        <div class="tab-pane" id="profile">
                            <img src="images/imge.jpg" class="img-responsive thumbnail" width="114" height="114" alt="" />

                            <h3>rupaghosh<br />
                                Description from the Photographer
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>
                            <p class="clearfix">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pord-slideBar">

                <?Php include 'inc/canves-print.php'; ?>

                <?Php include 'inc/gnarly-sunset.php'; ?>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 collections ">
            <h2>Collections Recommended for You</h2>

            <?php include 'inc/collections-sliders.php'; ?>

        </div>
    </div>

</div>

<?php require 'footer.php'; ?>