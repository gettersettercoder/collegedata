<?php 
include 'classes/constants.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Splask</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rajputana womens unity list,odhani womens,pratapgarh,arnod,chotisadri">
         
<meta name="description" 
         content="royal rajputana pratapgarh rajsthan members,odhani members list online,online rajput womens check unity">
<link href="<?php echo CSS_FILE; ?>/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_FILE; ?>/coin-slider.css" />
<script type="text/javascript" src="<?php echo JS_FILE; ?>/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/cufon-titillium-600.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/script.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/coin-slider.min.js"></script>

</head>
<body>
<div class="main">
   <?php  include 'header.php';?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        <h3>Welcome to odhani royal rajputana womens club below we have listed members of our group you can also registered online in our group <a href="register.php">click here</a> then you will be show in below list </h3>
         <table align = "center" cellspacing = "0" cellpading = "1" border = "1">
         <tr>
         <td>Full Name</td>
         <td>Thikana</td>
         </tr>
         <?php 
         $sql = "select name,address from register";
         $res = mysql_query($sql);
         while($fetch = mysql_fetch_array($res)){
         
         
         ?>
         <tr>
           <td><?php echo $fetch['name']; ?></td>
           <td><?php echo $fetch['address']; ?></td>
         </tr>
         <?php } ?>
         
         </table>  
        </div>
        
        
      </div>
      <?php  include_once 'sidebar.php';?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
</div>

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-600.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</html>

