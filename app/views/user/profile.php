<title>Offerciti | User Profile</title><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Offerciti offline discounts"/><meta name="keywords" content="Offers, discounts"/><meta name="author" content="www.offerciti.com"/></head><script>    $(document).ready(function(){        $("#btn_cancel").hide();        $("#btn_update").hide();        $("#btn_edit").click(function(){            $("#btn_edit").hide();            $("#btn_cancel").show();            $("#btn_update").show();           /* $("#first_name").enable = true;            $("#last_name").setDisable(false);            $("#phone_number").enable();            $("#dob").enable();            $("#location").enable();*/        });        $("#btn_cancel").click(function(){            $("#btn_edit").show();            $("#btn_cancel").hide();            $("#btn_update").hide();            /*$("#first_name").disable();            $("#last_name").disable();            $("#phone_number").disable();            $("#dob").disable();            $("#location").disable();*/        });    });</script><body><div class="container-fluid vendor-dshbrd">    <header>        <!-- top nav section -->        <section class="top-sec-nav">            <?php include 'app/views/includes/top-nav.php'; ?>        </section>        <!-- top nav section ends -->        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>        <script type="text/javascript">            function initialize() {                var input = document.getElementById('location');                var options = {componentRestrictions: {country: 'in'}};                new google.maps.places.Autocomplete(input, options);            }            google.maps.event.addDomListener(window, 'load', initialize);        </script>    </header>    <div class="store-ac-main-wrap animated fadeIn" data-animate="fadeIn">        <div id="store-ac-wrap-inner" style="margin-top:50px;" class="mainbox  col-md-10 col-md-offset-1">            <div class="panel panel-info">                <div class="panel-heading">                    <div class="panel-title">My Account</div>                </div>                <div style="padding-top:30px" class="panel-body">                    <div class="panel-group" id="accordion">                        <div class="panel panel-default">                            <div class="panel-heading">                                <h6 class="panel-title">                                    <?php echo $result->first_name.' '.$result->last_name ?>                                </h6>                            </div>                            <div id="collapse1" class="panel-collapse collapse in">                                <div class="panel-body">                                    <div class="row">                                        <div class="col-sm-2">                                            <a id="" href="profile" class="btn btn-theme-dark btn-theme-dark"><span                                                    class="glyphicon glyphicon-user"></span>Profile </a>                                        </div>                                        <div class="col-sm-2">                                            <a id="" href="user_change_password"                                               class="btn btn-theme btn-theme-block"><span                                                    class="glyphicon glyphicon-lock"></span>Change Password</a>                                        </div>                                        <div class="col-sm-2">                                            <a id="" href="favourites" class="btn btn-theme btn-theme-block"><span                                                    class="glyphicon glyphicon-heart"></span>Favourites </a>                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>            </div>            <!-- user change password starts -->            <div class="mainbox">                <div class="panel panel-info">                    <div class="panel-heading">                        <div class="panel-title">Profile</div>                    </div>                    <div class="panel-body">                        <form id="oc-form" class="form-horizontal" role="form"                              action="update_user_profile" method="post">                            <div class="form-group">                                <label for="first_name" class="col-md-4 control-label">*First Name </label>                                <div class="col-md-6">                                    <input type="text" class="form-control" id="first_name" name="first_name"                                           placeholder="First Name..."                                           value="<?php echo $result->first_name ?>">                                </div>                            </div>                            <div class="form-group">                                <label for="last_name" class="col-md-4 control-label">*Last Name</label>                                <div class="col-md-6">                                    <input type="text" class="form-control" id="last_name" name="last_name"                                           placeholder="Last Name..." value="<?php echo $result->last_name ?>">                                </div>                            </div>                            <div class="form-group">                                <label for="email" class="col-md-4 control-label">*Email</label>                                <div class="col-md-6">                                    <input type="email" class="form-control" id="email" name="email" disabled                                           placeholder="Email address..." value="<?php echo $result->email ?>">                                </div>                            </div>                            <div class="form-group">                                <label for="phone_number" class="col-md-4 control-label">*Phone Number</label>                                <div class="col-md-6">                                    <input type="text" id="phone_number" name="phone_number" class="form-control"                                           placeholder="Contact number..." value="<?php echo $result->contact_number ?>">                                </div>                            </div>                            <div class="form-group">                                <label class="col-md-4 control-label">*Gender</label>                                <div class="col-md-2">							<span class="input-blue radio">							   <input type="radio" id="Male" <?php if ($result->gender == 'M') { ?>checked <?php } ?>                                      value="M" name="gender">							   <label for="Male">Male</label>							</span>                                </div>                                <div class="col-md-3">                          <span class="input-blue radio">							   <input type="radio" id="Female"                                      <?php if ($result->gender == 'F') { ?>checked <?php } ?> value="F"                                      name="gender">							   <label for="Female">Female</label>							</span>                                </div>                            </div>                            <div class="form-group">                                <label for="dob" class="col-md-4 control-label">*Date of Birth</label>                                <div class="col-md-4">                                    <input type="text" id="dob" name="dob" class="form-control date-pic"                                            value="<?php echo $result->dob; ?>" placeholder="02/02/1981" >                                </div>                            </div>                            <div class="form-group">                                <label for="location" class="col-md-4 control-label">*Location / Address</label>                                <div class="col-md-6">                                    <input type="text" class="form-control" id="location"                                           value="<?php echo $result->area . " ," . $result->city . "," . $result->state; ?>"                                           placeholder="Ex: JNTU, KPHB, Hyderabad, Telangana" name="location">                                </div>                            </div>                            <div class="form-group">                                <!-- Button -->                                <div class="col-md-offset-4 col-md-8">                                    <a onclick="editProfile()" id="btn_edit" class="btn btn-info">                                        <i class="icon-hand-right"></i>Edit</a>                                    <button id="btn_update" type="submit" class="btn btn-theme-dark">                                        Update                                    </button>                                    <a onclick="cancelEdit()" id="btn_cancel" class="btn btn-info">                                        <i class="icon-hand-right"></i>Cancel</a>                                </div>                            </div>                        </form>                    </div>                </div>            </div>            <!-- user change password ends -->        </div>    </div></div>