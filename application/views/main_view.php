<!DOCTYPE html>

<?php
/**
* Adding News for Demo request by applying check on addnews POST parameter
**/
/**
* Preparing and getting response for latest feed items.
**/
if(isset($_POST['latest_news_time'])){
	$sql = "SELECT * FROM news WHERE date > '".$_POST['latest_news_time']."' ORDER BY date DESC";
	$resource = mysql_query($sql);
	$current_time = $_POST['latest_news_time'];
	$item = mysql_fetch_assoc($resource);
	$last_news_time = $item['date'];
	while ($last_news_time < $current_time) {
		usleep(1000); //giving some rest to CPU
		$resource = mysql_query($sql);
		$item = mysql_fetch_assoc($resource);
		$last_news_time = $item['date'];
	}
	?>
	<li id="<?php echo $item['date'] ?>">
		<span class="feedtext"><?php echo $item['description'] ?> was added by <b><?php echo $item['name'] ?></b></span>
	</li>
	<?php
	exit;
}
/**
* Getting news Items and preparing sql query with respect to request
**/
$sql = "SELECT * FROM news ORDER BY date DESC LIMIT 0, 10";
if(isset($_POST['last_time'])){
	$sql = "SELECT * FROM news WHERE date < '".$_POST['last_time']."' ORDER BY date DESC LIMIT 0, 10";
}
$resource = mysql_query($sql);
$news = array();
while($row = mysql_fetch_assoc($resource)){
	$news[] = $row;
}

?>


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
    <script type="text/javascript">
$(function(){
	/**
	* Integrating slim scroll
	**/
	$("#feeds ul").slimScroll({
        height: '520px'
    });
    

$(function(){
/*$('#expandable').find('ul').slideUp();*/
$('.child').hide();
$('.parent').click(function() {
    $('#expandable').find('ul').slideUp();
    $(this).find('ul').slideToggle();
});
});
   
    
	/**
	* Integrating Scroll Pagination
	**/
	var feeds = $("#feeds ul");
	var last_time = feeds.children().last().attr('id');
    feeds.scrollFeedPagination({
        'contentPage': 'index.php',
        'contentData': {
            'last_time' : last_time
        },
        'scrollTarget': feeds, 
        'beforeLoad': function(){
            feeds.parents('#feeds').find('.loading').fadeIn();
        },
        'afterLoad': function(elementsLoaded){
            last_time = feeds.children().last().attr('id');
            feeds.scrollFeedPagination.defaults.contentData.last_time = last_time;
            feeds.parents('#feeds').find('.loading').fadeOut();
            var i = 1;
            $(elementsLoaded).fadeInWithDelay();
        }
    });
    $.fn.fadeInWithDelay = function(){
        var delay = 0;
        return this.each(function(){
            $(this).delay(delay).animate({
                opacity:1
            }, 200);
            delay += 100;
        });
    };
	//calling the function to update news feed
    setTimeout('updateFeed()', 1000);
});
/**
* Function to update the news feed
**/
function updateFeed(){
		var id = 0;
		id = $('#feeds li :first').attr('id');
        $.ajax({
            'url' : 'index.php',
            'type' : 'POST',
            'data' : {
                'latest_news_time' : id  
            },
            success : function(data){
				setTimeout('updateFeed()', 1000);
				if(id != 0){
                	$(data).prependTo("#feeds ul");
				}
            }
        }) 
	}
</script>
    
    
    
    
    
    
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
            <div class="main_container">
            <div class="feeds_container">
                <h3 class="feed_head">News Feed</h3>
                <div id="feeds" class="feeds">
                    <ul>
                        <?php foreach($news as $item): ?>
					<li id="<?php echo $item['date'] ?>">
						<span class="feedtext"><?php echo $item['description'] ?> was added by <b><?php echo $item['name'] ?></b></span>
					</li>
					<?php endforeach; ?>
                    </ul>
                    <div class="loading">
                        <img src="application/views/_assets/img/loading_transparent.gif"  alt=""/>
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



