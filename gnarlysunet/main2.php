<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mainPage-sidebar"> 
            <img src="images/songs.jpg" class="img-responsive" alt=" " width="300" height="250" />

            <img src="images/help-us.jpg" class="img-responsive" alt=" " width="275" height="51">

            <?php include 'inc/nav-sidebar.php'; ?>

            <img src="images/robotics.jpg" alt=" " /> 
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <div class="mainPage-content mainPage-content2">
                <h1>See <strong>Current Weather</strong> and <strong>Forecasts for Anywhere</strong> on Earth</h1>
                <p>Access hourly, daily, and weekly forecasts, monthly averages, historical records 
                    and more by choosing a location below:</p>

                <div class="map map2">                 

                    <div class="row title">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <h2>ENTER LOCATION</h2>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <button type="submit" class="btn">See Weather</button>
                        </div>
                    </div>

                    <a href="#" title="location"><img src="images/map.jpg" class="img-responsive" alt=" " width="100%" height="248" /></a>
                </div>
                <br />
                <img src="images/sheck-out.jpg" class="img-responsive" alt=" " />
                <br />
                <h3>Lorem ipsum dolor sit amet,</h3>
                <p>consectetuer adipiscing 
                    elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. 
                </p>
                <p>
                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                </p>
            </div>

            <div class="row foot-sidebar">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <?php include 'inc/box-blogs.php'; ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <?php include 'inc/box-pictures.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>