<?php
// Create our Application instance (replace this with your appId and secret).
$config = array(
    'appId' => '642856869082856',
    'secret' => '9e036ddd059ea1f1a370404779d4ffb8',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);

//on logout page
setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', 'http://54.193.10.253');
session_destroy();
header("Location: http://54.193.10.253");
die();
?>
