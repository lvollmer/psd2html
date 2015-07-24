<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!--<script type="text/javascript" src="js/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/mainStyle.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/tools.scrollable.js"></script>
        <script type="text/javascript" src="js/tools.scrollable.circular.js"></script>
        <script type="text/javascript" src="js/tools.scrollable.autoscroll.js"></script>

    </head>

    <body>

        <div id="header">
            <div class="hed-logo">
                <div class="container">
                    <div class="row">                        
                        <div class="logo col-lg-8 col-md-8 col-sm-6 col-xs-6"><a href=""><img src="images/logo.jpg" class="img-responsive" alt="Gnarly Sunset" /></a></div>

                        <div class="search col-lg-4 col-md-4 col-sm-6 col-xs-6">

                            <p class="text-right"><a href="#">Share Your Photos</a> | <a href="#">Login</a></p>

                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search Cities &amp; Countries">

                                <div class="input-group-btn">

                                    <button type="button" class="btn btn-default" data-toggle=""><span class="glyphicon glyphicon-search"></span></button>  
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>                                

                                    <div class="dropdown-menu pull-right dropdown">
                                        <form role="form">
                                            <div class="form-group">
                                                <input type="text" value="Title" onfocus="if (this.value == 'Title')
                                                            (this.value = '')" onblur="if (this.value == '')
                                                                        (this.value = 'Title')" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="Link" onfocus="if (this.value == 'Link')
                                                            (this.value = '')" onblur="if (this.value == '')
                                                                        (this.value = 'Link')" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="Text" onfocus="if (this.value == 'Text')
                                                            (this.value = '')" onblur="if (this.value == '')
                                                                        (this.value = 'Text')" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="Icon" onfocus="if (this.value == 'Icon')
                                                            (this.value = '')" onblur="if (this.value == '')
                                                                        (this.value = 'Icon')" class="form-control" />
                                            </div>

                                            <input type="submit" value="Submit" class="btn btn-default" />

                                        </form>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hed-navi">
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- <a class="navbar-brand" href="#">Brand</a> -->
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">HOME</a></li>
                                    <li><a href="#">SHOP PHOTOS</a> </li>
                                    <li><a href="#">WEATHER</a> </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TIME <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Sunrise/Sunset Times </a></li>
                                            <li><a href="#">Current Time by Location </a></li>
                                            <li><a href="#">Time Zone Map</a></li>
                                        </ul>
                                    </li>
                                </ul>                                    

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 14px;"><span class="shopping-cart"><img src="images/adtocart_icon.png" />&nbsp;</span> 0 Items: $0.00 <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">View Cart</a></li>                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>            
        </div>
