<?php 
$server = 'http://'.$_SERVER['HTTP_HOST'];
defined('SITE_URL') or define('SITE_URL',$server.'/odhani');
defined('JS_FILE') or define('JS_FILE',$server.'/odhani/js');
defined('CSS_FILES') or define('CSS_FILE',$server.'/odhani/css');
defined('IMAGES') or define('IMAGES',$server.'/odhani/images');


if($_SERVER['HTTP_HOST']=='localhost'){
	$GetRootIp='localhost';//127.0.01
	$GetDirectory='root';
	$GetDatabasePassword='root';
	$GetDatabaseName='odhani';
}
else
{

	$GetRootIp='199.79.62.23';//127.0.01
	$GetDirectory='samiskhanews2';
	$GetDatabasePassword='1*1d2duP';
	$GetDatabaseName='dataairn_samiksha';

}


mysql_connect($GetRootIp,$GetDirectory,$GetDatabasePassword);
mysql_select_db($GetDatabaseName);




?>
