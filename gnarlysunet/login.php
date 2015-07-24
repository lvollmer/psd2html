<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="login-area col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
            <div class="sign-in">
                <h2>Sign in to my account</h2>
                <div class="signIn-content">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="check"><b>Keep me signed in</b>
                            </label>
                        </div>
                        <button type="submit" class="btn">LOGIN</button>
                        <p class="clearfix"></p>
                    </form>

                    <div class="forget"><!-- forget starts -->
                        <a href="#" title="password">Help! I forgot my password</a>
                        <a href="#" title="username">Forgot my Username</a>
                    </div> 
                </div>
            </div>
        </div>


        <div class="login-area col-lg-5 col-md-5 col-sm-6 col-xs-12">
            <div class="register">
                <h2>Register for a FREE account</h2>
                <div class="register-content">
                    <p>
                        <b>Lorem ipsum dolor sit amet,</b>
                        consectetur adipiscing elit. Pellentesque porttitor, 
                        leo in iaculis bibendum, dui tellus sagittis libero. 
                    </p>
                    <p>Fermentum lacinia augue libero et magna. Cum sociis natoque penatibus</p>
                    <br />
                    <a href="#" class="btn" />REGISTER NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>