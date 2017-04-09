<?php 
include 'classes/constants.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Splask | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo CSS_FILE; ?>/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_FILE; ?>/coin-slider.css" />
<script type="text/javascript" src="<?php echo JS_FILE; ?>/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/cufon-titillium-600.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/script.js"></script>
<script type="text/javascript" src="<?php echo JS_FILE; ?>/coin-slider.min.js"></script>
</head>
<body>
<div class="main subpage">
   
    <?php include 'header.php';
   if(isset($_REQUEST['submit'])){
   	
   	$name = $_REQUEST['name'];
   	$email = $_REQUEST['mobile'];
   	$address = $_REQUEST['address'];
   	$message = $_REQUEST['message'];
   	$time = date('Y-m-d h:i:s');
   	
   	$sql = "insert into contact(name,mobile,address,comments,created_date) values('$name','$email','$address','$message','$time')";
   	$script = mysql_query($sql);
    if($script){
    	
    	?>
    	<script>
    	alert('Thank You ! your message has been sent successfully');
    	</script>
    	
    	<?php 
    	
    }   	
   	
   	
   	
   	
   }
   
   ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p>If you have any query or any suggation for odhani royal rajputana womens club you can please share with us we will think about your suggation</p>
        </div>
        <div class="article">
          <h2><span>Send us</span></h2>
          <div class="clr"></div>
          <form  method="post" id="sendemail" action = "#">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" placeholder = "Please enter your name*" required />
              </li>
              <li>
                <label for="email">Mobile number</label>
                <input id="mobile" name="mobile" class="text" placeholder = "Please enter your mobile number*"  required/>
              </li>
              <li>
                <label for="email">Address/Thikana</label>
                <input type = "text" id="address" name="address" class="text" placeholder = "please enter your adddress*" required/>
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50" placeholder  = "Please enter your message here*" required></textarea>
              </li>
              <li>
               <br>
                <input type="submit" name = "submit" value = "Submit"/>
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
     <?php  include_once 'sidebar.php';?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
  </div>
</body>
</html>
