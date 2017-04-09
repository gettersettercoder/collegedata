<?php 
$server = 'http://'.$_SERVER['HTTP_HOST'];
defined('SITE_URL') or define('SITE_URL',$server.'/odhani');
defined('JS_FILE') or define('JS_FILE',$server.'/odhani/js');
defined('CSS_FILES') or define('CSS_FILE',$server.'/odhani/css');
defined('IMAGES') or define('IMAGES',$server.'/odhani/images');
?>
