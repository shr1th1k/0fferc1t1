<title>Offerciti | Advertiser Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Offerciti offline discounts"/>
<meta name="keywords" content="Offers, discounts"/>
<meta name="author" content="www.offerciti.com"/>
</head>

<body>
<form class="form-inline" role="form">
   <div class="modal fade signup-otp-pop" id="myModal" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Enter Your Mobile No</h4>
            </div>
            <div class="modal-body">
               <div class="">
                  <input type="text" class="form-control" id="phone-number" placeholder="Mobile Number">
                  <button type="button" class="btn btn-theme-dark">Send OTP</button>
               </div>
               <div class="">
                  <input type="text" class="form-control" id="mob-no" placeholder="*Enter Verification Code"
                         maxlength="10" required="1" value="">
                  <a href="merchant_thank_you" class="btn btn-theme">Signup</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>

<div class="container-fluid">
   <header>
      <!-- top nav section -->
      <section class="top-sec-nav">
         <?php include('app/views/includes/top-nav.php'); ?>

      </section>
   </header>
   <!-- END .header -->
   <div id="signupbox" style="margin-top:50px"
        class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 visitor-form-wrap animated fadeInDown"
        data-animate="fadeInDown">
      <div class="panel panel-info">
         <div class="panel-heading">
            <div class="panel-title">Advertiser Sign Up
               <div class="already-registered"><a href="merchant_login" id="Advertiser-login">Already
                     Registered?</a></div>
            </div>
         </div>
         <div class="panel-body">
            <form id="oc-form" class="form-horizontal" role="form">
               <div id="signupalert" style="display:none" class="alert alert-danger">
                  <p>Error:</p>
                  <span></span>
               </div>
               <div>
                  <div class="form-group">
                     <label for="email" class="col-md-4 control-label">*Store Name</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="email" placeholder="Store Name">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="email" class="col-md-4 control-label">*Contact Person</label>
                     <div class="col-md-3">
                        <input type="text" class="form-control" id="email" placeholder="First Name">
                     </div>
                     <div class="col-md-3">
                        <input type="text" class="form-control" id="email" placeholder="Last Name">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="create-user-name" class="col-md-4 control-label">*User Name</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="create-user-name" placeholder="User Name">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="create-password" class="col-md-4 control-label">*Password</label>
                     <div class="col-md-6">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="Retype-password" class="col-md-4 control-label">*Retype Password</label>
                     <div class="col-md-6">
                        <input type="password" class="form-control" id="Retype-password"
                               placeholder="Retype Password">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="email" class="col-md-4 control-label">*Email Id</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="area" class="col-md-4 control-label">Landline</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="landline" placeholder="Landline Number">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="email" class="col-md-4 control-label">*Location / Address</label>
                     <div class="col-md-6">
                        <input id="googleLocation" name="googleLocation" type="text" size="50" placeholder="Ex: JNTU, KPHB, Hyderabad, Telangana" autocomplete="on" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="area" class="col-md-4 control-label">*Area/Location</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="area" placeholder="Area" disabled>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="city" class="col-md-4 control-label">*City</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="city" placeholder="City" disabled>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="state" class="col-md-4 control-label">*State</label>
                     <div class="col-md-6">
                        <input type="text" class="form-control" id="ara" placeholder="state" disabled>
                     </div>
                  </div>

                  <div class="col-md-offset-4 col-md-8">
                     <button type="submit" class="btn btn btn-theme"> <!--data-toggle="modal" data-target="#myModal" *** don't remove this-->
                        Next
                     </button>
                  </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>