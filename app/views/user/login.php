<title>Offerciti | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>
</head>

<body>
<div class="container-fluid">
    <header>
        <!-- top nav section -->
        <section class="top-sec-nav">
            <?php include 'app/views/includes/top-nav.php'; ?>
        </section>
    </header>
    <!-- END .header -->

    <div class="login-main-wrap animated fadeInDown" data-animate="fadeInDown">
        <!-- login starts -->
        <?php
        ?>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" id="loginform-panel">
                <div class="panel-heading">
                    <div class="panel-title">Login</div>
                    <div class="forgot-pwd"><a href="merchant_login" id="Advertiser-login">Are you an Advertiser?</a>
                    </div>
                </div>
                <div style="padding-top:30px" class="panel-body">
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <!--  <form id="loginform" class="form-horizontal" role="form">-->
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-warning">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php } else if ($this->session->flashdata('msg')) { ?>
                        <div class="alert alert-warning">
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>
                    <?php echo form_open('app/login_user', 'id="loginForm" class="form-horizontal" role="form" method="post" autocomplete="off"') ?>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="form-control" required name="email"
                               value="kishorefx@gmail.com"
                               placeholder="Enter your Email Address">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" required name="password"
                               placeholder="password" value="admin123">
                    </div>
                    <div class="input-group">
                           <span class="input-blue checkbox">
                           <input type="checkbox" name="remember_me" id="remember_me">
                           <label for="checkbox1">Remember Me</label>
                           </span>
                    </div>
                    <div class="forgot-pwd"><a href="#" id="forgot-credentials">Forgot password?</a></div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls user-login-btn-wrap">
                            <input type="submit" name="submit" class="btn btn-theme" value="Login">

                            <!--@TODO: testing notifications.. will be removed... Growl Notifications Content -->
                            <!-- Notifications functionality is initialized in js/pages/uiProgress.js -->
                           <!-- <button onclick="NotificationService.showMessage('success', 'Sample success message...');" type="button" class="btn btn-effect-ripple btn-success btn-growl" data-growl="success"><i class="fa fa-fw fa-check-circle"></i> Success</button>
                            <button onclick="NotificationService.showMessage('info', 'Sample info message...');" type="button" class="btn btn-effect-ripple btn-info btn-growl" data-growl="info"><i class="fa fa-fw fa-info-circle"></i> Info</button>
                            <button onclick="NotificationService.showMessage('warning', 'Sample warning message...');" type="button" class="btn btn-effect-ripple btn-warning btn-growl" data-growl="warning"><i class="fa fa-fw fa-exclamation-circle"></i> Warning</button>
                            <button onclick="NotificationService.showMessage('danger', 'Sample danger message...');" type="button" class="btn btn-effect-ripple btn-danger btn-growl" data-growl="danger"><i class="fa fa-fw fa-times-circle"></i> Danger</button>-->
                            <!-- END Growl Notifications Content -->


                        </div>
                    </div>
                    <p class="or-wrap">OR</p>
                    <div class="form-group social-login-wrap">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <a id="fb-login" href="https://www.facebook.com/login/"
                               class="btn btn-success fb-login"><img
                                    src="<?php echo base_url() ?>app/assets/images/fb.png"/>Login with Facebook</a>
                        </div>
                    </div>
                    <div class="form-group social-login-wrap">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <a id="gplus-login" href="https://accounts.google.com/Login"
                               class="btn btn-success gplus-login"><img
                                    src="<?php echo base_url() ?>app/assets/images/googleplus.png"/>Login with
                                Google</a>
                        </div>
                    </div>
                    <!-- Sample comment by Uma kanth-->
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div class="dont-ac">
                                Don't have an account!
                                <a href="sign_up" id="create-ac-btn">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-info" id="forgot-credentials-form-panel">
                <div class="panel-heading">
                    <div class="panel-title">Forgot password</div>
                </div>
                <div class="panel-body">
                    <form id="oc-form" class="form-horizontal" role="form" method="post"
                          action="send_reset_link">
                        <p>Please enter your email id below. We will send you a link to reset your password.</p>
                        <div class="form-group forgot-cre">
                            <label for="contact-email" class="col-xs-3 control-label">*Email</label>
                            <div class="col-xs-9">
                                <input id="email" name="email" type="email" class="form-control"
                                       placeholder="Registered Email...">
                            </div>
                        </div>
                        <div class="form-group send-email-wrap">
                            <!-- Button -->
                            <div class="col-xs-12 controls">
                                <button id="forgot-credentials-submit" type="submit" class="btn btn-theme-dark">
                                    Send email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>