<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 mainPage-content">

            <div class="map"> 
                
                <div class="row title">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <h2>ENTER LOCATION</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" placeholder="Type your zip code, city state,aieport code or country">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <button type="submit" class="btn">Search Now</button>
                    </div>
                </div>

                <a href="#" title="location"><img src="images/map.jpg" class="img-responsive" alt=" " width="100%" height="248" /></a>

                <div class="row title title2">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <h2>ENTER EVENT</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" placeholder="Type your zip code, city state,aieport code or country">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <button type="submit" class="btn">Search Now</button>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-lg-8 col-xs-12 event-map">
                        <a href="#" title="world"><img src="images/gs_main_map.jpg" alt=" " width="100%" height="321" /></a>
                    </div>
                    <div class="col-lg-4 col-xs-12 event-side">
                        <ol>
                            <li><p> World Hight temperature for April 3 </p></li>
                            <li><p> 5.8 earthguake Myaydo </p></li>
                            <li><p> VA Set arecard Low tem perature of 23 for Apr 03 </p></li>
                            <li><p> NY set a record low temperature of 28 for Apr 03 </p></li>
                            <li><p> World Hight temperature for April 3 </p></li>
                            <li><p> 5.8 earthguake Myaydo </p></li>
                            <li><p> VA Set arecard Low tem perature of 23 for Apr 03 </p></li>
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mainPage-sidebar">                       
            <img src="images/help-us.jpg" class="img-responsive" alt=" " width="275" height="51">

            <?php include 'inc/nav-sidebar.php'; ?>
        </div>
    </div>
    
    <div class="row foot-sidebar">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php include 'inc/box-news.php'; ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php include 'inc/box-blogs.php'; ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php include 'inc/box-pictures.php'; ?>
        </div>
    </div>
    
</div>

<?php require 'footer.php'; ?>
