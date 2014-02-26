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
        <link href="application/views/_assets/css/main-view.css" rel="stylesheet">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
        <script src="application/views/js/scroll-pagination.js" type="text/javascript"></script>
        <script src="application/views/js/slimScroll.js" type="text/javascript"></script>
        
        
        
        
        
        
    </head>
    
    
    
    
    
    
    
    <body>
        
        
 
        
        
   
        <!-- BEGIN: Sticky Header -->
<div id="header_container">
    <div id="header">
        <img  src="application/views/_assets/img/logo-main-banner.png" alt="logo" class="main-logo-header" />
        <input type="text" name="s" id="search-text" size="15" value="" Placeholder="Search for places and things to do"  class="search">
        <?php
        
            $config = array(
            'appId' => '642856869082856',
            'secret' => '9e036ddd059ea1f1a370404779d4ffb8',
            'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
            );

            $facebook = new Facebook($config);
            //$logOut = $facebook->getLogoutUrl(array('next' => "index.php/logout"));
        
        ?>
       <a href="index.php/logout">Log Out</a>
    </div>
</div>
<!-- END: Sticky Header -->

<!-- BEGIN: Page Content -->
<div id="container">
    <div id="content">
        <div id="nav">
         
            <div id="floatMenu">
                <div id="picAndName">   
            <?php
            /*$config = array(
            'appId' => '642856869082856',
            'secret' => '9e036ddd059ea1f1a370404779d4ffb8',
            'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
            );

            $facebook = new Facebook($config);*/
            $user_id = $facebook->getUser();
            
            
            //$user_profile = $facebook->api('/me','GET');
            $user_profile = $facebook->api('/me?fields=picture.width(100).height(100),first_name,last_name,username,email');
            
            $photoUrl = "https://graph.facebook.com/".$user_profile['username']."/picture";
            $facebookPhoto = '<img class="fb" src="'.$photoUrl.'" alt="FacebookUserImage"/>';
            echo $facebookPhoto;
            echo "  ";
            echo $user_profile['first_name'];
            echo " ";
            echo $user_profile['last_name'];
            
            ?>
                </div>   
            <ul class="float-menu-ul">
                <li><a href="index.php/main">Dashboards </a></li>
            </ul>
     
            <ul id="expandable" class="float-menu-ul">
                <li class="parent"><a href="#">New adventure</a>
                <ul class="child">
                    <li><a href="index.php/new_adventure/index/india">India & Nepal</a></li>
                    <li><a href="index.php/new_adventure/index/asia">South East Asia</a></li>
                    <li><a href="index.php/new_adventure/index/america">Central & South America</a></li>
                    <li><a href="index.php/new_adventure/index/africa">Eastern Africa</a></li>
                </ul>
                </li>    
            </ul>
            <ul class="float-menu-ul">
                    
                <li><a href="#" onclick="return false;">Past adventures </a></li>
            </ul>
            <ul class="float-menu-ul">
                <li><a href="#" onclick="return false;">Explore </a></li>
            </ul>
     
            <ul class="float-menu-ul">
                <li><a href="#" onclick="return false;">Community </a></li>
            </ul>
                
                
                
        </div>
            
            
        </div>
        <div id="main">
            <div id="main_container">
                <div id="main_container_section">
            <p>New adventure >
                <?php 
                
                if ($data == "india")
                  echo "India & Nepal";
                if ($data == "asia")
                    echo "South East Asia";
                if ($data == "africa")
                  echo "Eastern Africa";
                if ($data == "america")
                    echo "Central & South America";
                
                
                ?>
            </p>
                </div>
                <div id="main_container_subprincipal">
                    <div id="search_travel_form">
                        <form id="search"></form>
                            a 
                    </div>
                    <div id="search_travel_results">
                        b
                    </div>    
                </div>
                </div>
            </div>
            
        </div>    
    </div>
</div>
<!-- END: Page Content -->



  
        
    </body>
    
</html>



