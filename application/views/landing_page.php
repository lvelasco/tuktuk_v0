<!DOCTYPE html>
<html lang="en">
  <base href="<?php echo base_url(); ?>" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="lvelasco">
        
        <title>tuk tuk</title>
        
        <!-- Bootstrap Core CSS -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        
        <!-- Fonts -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,300,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href="application/views/_assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="application/views/_assets/css/animate.css" rel="stylesheet" media="screen">
        
        <!-- Custom Theme CSS -->
        <link href="application/views/_assets/css/horizon.css" rel="stylesheet">
        
        
    </head>
    
    <body id="page-top">
  
     
       
        
        
        <div class="container">
            
        </div>
        <!-- /.container -->
        
        
        <section class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <img  src="application/views/_assets/img/logo.png" alt="logo"class="img-circle" />
                        <div class="col-md-12">
                            <h1 class="brand-heading animated bounceInDown delay1">#tuk<span>tuk</span></h1>
                            <span class="bar animated fadeIn delay2"></span>
                            <p class="intro-text animated bounceInUp delay2">travel with impact</p>
            
        
               <!-- <form action='/welcome/process' method='post' name='process'>
                <label for="username" class="brand-heading-login animated bounceInDown delay1">Username
                <input type="text" id="username" name="username" class="brand-heading-login animated bounceInDown delay1"/>
                </label>

                <label for="password" class="brand-heading-login animated bounceInDown delay1">Password
                <input type="password"  id="passowrd" name="password" class="brand-heading-login animated bounceInDown delay1"/>
                </label>

                <input type="submit" value="Login" class="brand-heading-login animated bounceInDown delay1"/>

                </form>-->
                            
                  <a class="brand-heading-login animated bounceInDown delay1" href='<?php echo $facebook_login_url;?>'><img class="brand-heading-login animated bounceInDown delay1 fb-resize" src="application/views/_assets/img/fb-login.png"/></a>
                            
                           <!-- facebook login-->
                           
               
                            
                            
                            
                        
                            
                          
                            <div class="page-scroll animated fadeIn delay25">
                                <a href="#features" class="btn btn-circle animated pulse delay3">
                                    <i class="fa fa-angle-double-down"></i>
                                </a>
                            </div><!-- end page scroll -->
                        </div><!-- end col md 12 -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end intro body -->
        </section> <!-- end intro -->
        
        <section id="features" class="content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 service-spacer">
                        <h2>Explore the world, have social impact</h2>
                        <p>Here at tuk-tuk we believe in a different way to backpack the world. We help you to connect and engage with the local community to design and plan your trip</p>
                    </div><!--end col lg 12-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <i class="fa fa-sitemap icon"></i>
                        <h3>CONNECT</h3>
                        <p>Easily find and connect with drivers, hostel owners or travel buddies</p>
                    </div><!--end col lg 4 col md 4-->
                    <div class="col-lg-4 col-md-4">
                        <i class="fa fa-code-fork icon"></i>
                        <h3>DESIGN</h3>
                        <p>Review and pick a route made by backpackers like you or use our online tools to build the perfect trip.</p>
                    </div><!--end col lg 4 col md 4-->
                    <div class="col-lg-4 col-md-4">
                        <i class="fa fa-globe icon"></i>
                        <h3>TRAVEL</h3>
                        <p>Check what is your next destination on the move, upload pictures and keep your travel diary</p>
                    </div><!--end col lg 4 col md 4-->
                    
                </div><!--end row-->
            </div> <!--end container-->
            
        </section><!-- end features section -->
        
        <div class="container text-center">
            <i class="fa fa-caret-down arrow-black"></i>
        </div><!--end container-->
        
        <section id="info" class="content-section text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 service-spacer text-center">
                        <h2>What we believe on</h2>
                        <span class="bar-dark"></span>
                        <div class="quote hidden-xs">
                            <p class="lead">We are convinced that having fun while travelling and attempting to make as low impact on the environment and local culture is possible. Tourism should help to generate future employment for local people.</p>
                        </div><!--quote hidden xs-->
                    </div><!--end col lg 8-->
                </div><!--end row -->
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Local employment</h3>
                        <p>Eliminate the middle-man, engage directly with local service providers</p>
                    </div><!--end col lg 8-->
                    <div class="col-lg-4">
                        <h3>sustainability</h3>
                        <p>We only partner with social and environment friendly organizations</p>
                    </div><!--end col lg 4-->
                    <div class="col-lg-12">
                        <h3>Give back</h3>
                        <p>tuk tuk is free, we only ask you to devote one day while your trip volunteering on one social project: from helping to build a children school in Africa to engage with woman manufacturing craft items in India </p>
                    </div><!--end col lg 12-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end info section-->
        
        <div class="container text-center">
            <i class="fa fa-caret-down arrow-white"></i>
        </div><!--end container-->
        
        <section id="staff">
            <div class="content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 service-spacer text-center">
                            <h2>Travel destinations</h2>
                            <span class="bar-dark"></span>
                           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet porta nunc. Etiam congue neque consequat libero fermentum, ac suscipit turpis placerat. Ut semper purus eget urna condimentum consequat. Aliquam erat volutpat.</p>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-sm-offset-1 col-md-offset-1">
                            <div class="thumbnail">
                                <img  src="application/views/_assets/img/india.jpg" alt="picture" class="img-circle">
                                <div class="caption text-center">
                                    <h5>India & Nepal</h5>
                                    
                                </div><!--end caption text-center-->
                            </div><!--end thumbnail-->
                        </div><!--end col sm 2-->
                        <div class="col-sm-2 col-md-2">
                            <div class="thumbnail">
                                <img  src="application/views/_assets/img/south_east.png" alt="picture" class="img-circle" width="500" height="500">
                                <div class="caption text-center">
                                    <h5>South East Asia</h5>
                                    
                                </div><!--end caption text-center-->
                            </div><!--end thumbnail-->
                        </div><!--end col sm 2-->
                        <div class="col-sm-2 col-md-2">
                            <div class="thumbnail">
                                <img  src="application/views/_assets/img/peru.jpg" alt="picture" class="img-circle" width="500" height="500">
                                <div class="caption text-center">
                                    <h5>South America</h5>
                                   
                                </div><!--end caption text-center-->
                            </div><!--end thumbnail-->
                        </div><!--end col sm 2-->
                        <div class="col-sm-2 col-md-2">
                            <div class="thumbnail">
                                <img  src="application/views/_assets/img/africa.jpg" alt="picture" class="img-circle" width="500" height="500">
                                <div class="caption text-center">
                                    <h5>Eastern Africa</h5>
                                    
                                </div><!--end caption text-center-->
                            </div><!--end thumbnail-->
                        </div><!--end col sm 2-->
                        
                        
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end content section-->
        </section><!--end staff section-->
        
        <div class="container text-center">
            <i class="fa fa-caret-down arrow-grey"></i>
        </div><!--end container-->
        
       
        
        <section id="share" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Connect and share</h2>
                        
                        <div class="social">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a class="social-spacer" href="#"><i class="fa fa-twitter"></i></a> 
                                    <a class="social-spacer" href="#"><i class="fa fa-facebook"></i></a> 
                                    <a class="social-spacer" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="social-spacer" href="#"><i class="fa fa-instagram"></i></a>
                                    <a class="social-spacer" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="social-spacer" href="#"><i class="fa fa-tumblr"></i></a>
                                </div><!--end col lg 12-->
                            </div><!--end row-->
                        </div><!-- social -->
                    </div><!-- col lg 12 -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!--end share section-->
        
        <div class="container text-center">
            <i class="fa fa-caret-down arrow-white"></i>
        </div><!--end container-->
        
        <section id="footer" class="content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>&copy; Copyright 2014 - tuk tuk Inc. - All Rights Reserved.
                        </div><!-- col lg 12 -->
                </div><!-- row -->
            </div><!--container -->
        </section><!--end footer section-->
        
        <!-- Core JavaScript Files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        
        <!-- Custom Theme JavaScript -->
        <script src="application/views/_assets/js/grayscale.js"></script>
        
        
        
    </body>
    
</html>
