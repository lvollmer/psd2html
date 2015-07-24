<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive table-custom hidden-xs">
                <table class="table table-bordered">
                    <tr>
                        <td class="table-head" colspan="4">
                            <img src="images/shopping-logo.jpg" class="img-responsive" alt="" />
                            <h2>Your Shopping Cart</h2>
                            <a href="#" title="Checkout Now" class="btn">CHECKOUT NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <th>PRODUCT</th>
                        <th>QUAQNITY</th>
                        <th>PRICE</th>
                        <th>DELETE</th>
                    </tr>
                    <tr>
                        <td>  
                            <table class="table sub-table">
                                <tr>
                                    <td>
                                        <a href="#" title="pic"><img src="images/pic-a.jpg" class="thumbnail" alt=" " width="110" height="105" /></a>
                                    </td>
                                    <td>
                                        <h4>Cloud Circles </h4>
                                        <p>Style (Canvas, Triptych or Photo Prints) </p>
                                        <p>Size (8x10, 11x14, etc)</p> 
                                    </td>
                                </tr>
                            </table>                                                    
                        </td>
                        <td>
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input type="text" value="2" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-default update">Update</button>
                            </form>
                        </td>
                        <td>
                            <b>$30.00 <sub>USD</sub></b>
                        </td>
                        <td>
                            <a href="#" class="delete" title="delete"><img src="images/close.png" class="img-responsive" alt=" "  width="37" height="36" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table sub-table">
                                <tr>
                                    <td width="100px;">
                                        <a href="#" title="pic"><img src="images/pic-b.jpg" class="thumbnail" alt=" " width="110" height="105" /></a>
                                    </td>
                                    <td>
                                        <h4>Orange Sunset Over</h4>
                                        <h5>Lake Norman</h5> 
                                        <p>Style (Canvas, Triptych or Photo Prints) </p>
                                        <p>Size (8x10, 11x14, etc)</p> 
                                    </td>
                                </tr>
                            </table>  
                        </td>
                        <td>
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input type="text" value="2" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-default update">Update</button>
                            </form>
                        </td>
                        <td>
                            <b>$29.00 <sub>USD</sub></b>
                        </td>
                        <td>
                            <a href="#" class="delete" title="delete"><img src="images/close.png" class="img-responsive" alt=" "  width="37" height="36" /></a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row shopping-cart-mobile visible-xs">
                <div class="box-body">
                    <div class="col-xs-12 heade">
                        <img src="images/shopping-logo.jpg" class="img-responsive" alt="" />
                        <h2>Your Shopping Cart</h2>
                        <a href="#" title="Checkout Now" class="btn">CHECKOUT NOW</a>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <a href="#" title="pic"><img src="images/pic-a.jpg" class="thumbnail" alt=" " width="110" height="105" />
                                <h4>Cloud Circles </h4>
                                <p>Style (Canvas, Triptych or Photo Prints) </p>
                                <p>Size (8x10, 11x14, etc)</p> 
                            </a>
                        </div>
                    </div>

                    <div class="row">                        
                        <div class="col-xs-4">
                            <b>$30.00 <sub>USD</sub></b>                            
                        </div>
                        <div class="col-xs-4">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input type="text" value="2" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-default update">Update</button>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="delete" title="delete"><img src="images/close.png" class="img-responsive" alt=" "  width="37" height="36" /></a>
                        </div>
                    </div>  

                    <span class="bot-border"></span>

                    <div class="row">
                        <div class="col-xs-12">
                            <a href="#" title="pic"><img src="images/pic-b.jpg" class="thumbnail" alt=" " width="110" height="105" />
                                <h4>Orange Sunset Over</h4>
                                <p>Style (Canvas, Triptych or Photo Prints) </p>
                                <p>Size (8x10, 11x14, etc)</p> 
                            </a>
                        </div>
                    </div>

                    <div class="row">                        
                        <div class="col-xs-4">
                            <b>$29.00 <sub>USD</sub></b>                            
                        </div>
                        <div class="col-xs-4">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input type="text" value="2" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-default update">Update</button>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="delete" title="delete"><img src="images/close.png" class="img-responsive" alt=" "  width="37" height="36" /></a>
                        </div>
                    </div>

                </div>        

            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="promo-box">
                    <h3>Promo Code?</h3>             
                    <form class="form" role="form">
                        <div class="row">
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-default">APPLY CODE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="visible-xs">&nbsp;<br />&nbsp;</div>
            
            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered shipping-table">
                        <tr>
                            <td>
                                <p>Before Shipping and Taxes</p>
                            </td>
                            <td>
                                <span>$58.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><span class="star"></span>TIP: Free shipping when you spend over $100</p>
                            </td>
                            <td>
                                <span><a href="#">Shipping Policies</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td><b>TOTAL</b></td>
                            <td><b>$67.50</b></td>
                        </tr>
                    </table>
                </div>

                <div class="row safe-area">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left">
                        <a href="#" title="100%"><img src="images/100.png" class="img-responsive" alt=" " width="137" height="105" /></a>                    
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right">
                        <a href="#" title="Checkout Now" class="btn1">CHECKOUT NOW</a>
                        <a href="#" title="Keep Shopping" class="btn2">KEEP SHOPPING</a>
                        <p class="clearfix"></p>

                        <span class="lock"></span>
                        <h5>Secure shopping guaranteed.</h5>
                        <p>our shopping experience is always safe and secure.</p>
                        <p class="clearfix"></p>
                    </div>         
                </div>
            </div>
        </div>

        <span class="border">&nbsp;</span>

        <div class="row">
            <div class="col-lg-12 collections ">
                <h2>Collections Recommended for You</h2>

                <?php include 'inc/collections-sliders.php'; ?>

            </div>
        </div>


    </div>

    <?php require 'footer.php'; ?>