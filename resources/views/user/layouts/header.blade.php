<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>
                
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
            <li class="tol">Toll Number : 123-4568790</li> 
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<img src="{{asset('assets\logo.png')}}" height="120px"  style="float:left; margin-right: 5px;">


<div class="header" >
    <div class="container" >
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s" style="background-image: url('../../../../public/assets/banner.jpg');">
            <img src="{{asset('fassets\images/banner.jpg')}}" height="120px" width="950px"  style="float:left; margin-right: 5px;">
<!-- 
            <a  href="{{url('/')}}">Online <span class="span1"> Bus</span> <span>Ticketing</span></a>   -->  
        </div>
               <div style="margin-left:1150px;">      
            <a href="{{url('/register')}}" style=""><button class="btn btn-primary btn-xs" style=" height: 30px;font-size: 15px; "><i class="fas fa-file-signature"></i> Sign Up</button></a>
            <a href="{{url('/login')}}" ><button class="btn btn-primary btn-xs" style=" height: 30px;font-size: 15px;"><i class="glyphicon glyphicon-log-in"></i> Login</button></a>
        </div>
                
        <div class="clearfix"></div>
    </div>
</div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                            <section>
                                <div class="modal-body modal-spa">
                                    <div class="login-grids">
                                        <div class="login">
                                            <div class="login-left">
                                                <ul>
                                                    <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                                    <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                                    <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                                </ul>
                                            </div>
                                            <div class="login-right">
                                                <form>
                                                    <h3>Create your account </h3>
                                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                                    <input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                                                    <input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">   
                                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                                    <input type="submit" value="CREATE ACCOUNT">
                                                </form>
                                            </div>
                                                <div class="clearfix"></div>                                
                                        </div>
                                            <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                                    </div>
                                </div>
                            </section>
                    </div>
                </div>
            </div>
<!-- //sign -->
<!-- signin -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>                      
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-left">
                                        <ul>
                                            <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                            <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                            <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                        </ul>
                                    </div>
                                    <div class="login-right">
                                        <form>
                                            <h3>Signin with your account </h3>
                                            <input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required=""> 
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            <h4><a href="#">Forgot password</a></h4>
                                            <div class="single-bottom">
                                                <input type="checkbox" id="brand" value="">
                                                <label for="brand"><span></span>Remember Me.</label>
                                            </div>
                                            <input type="submit" value="SIGNIN">
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>                                
                                </div>
                                <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('fassets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('fassets/css/style.css')}}" rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="{{asset('fassets/css/carousel.css')}}">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="{{asset('fassets/css/font-awesome.css')}}" rel="stylesheet">
<!-- Custom Theme files -->
<script src="{{asset('fassets/js/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('fassets/js/bootstrap.min.js')}}"></script>
<!--animate-->
<link href="{{asset('fassets/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('fassets/js/wow.min.js')}}"></script>
    <script>
         new WOW().init();
    </script>