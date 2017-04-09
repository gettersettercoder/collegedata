<?php 
include 'classes/constants.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>odhani royal rajputana womens club registration online</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow">
<meta name="keywords" content="rajputana ladies,odhani,womens club,pratapgarh rajsthan,fashion,maharani,sisodiya,chouhan,rathore,rajputana unities">
         
<meta name="description" 
         content="any rajputana unity trust,odhani royal rajputana womens club in pratapgarh rajsthan,rajputana ladies unity,karni sena,register for rajputana">
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
   	$race = $_REQUEST['race'];
   	$message = $_REQUEST['message'];
   	$time = date('Y-m-d h:i:s');
   	
   	$sql = "insert into register(name,mobile,address,race,comments,created_date) values('$name','$email','$address','$race','$message','$time')";
   	$script = mysql_query($sql);
    if($script){
    	
    	?>
    	<script>
    	alert('Thank You ! you are registered successfully');
    	</script>
    	
    	<?php 
    	
    }   	
   	
   	
   	
   	
   }
   
   ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Register</span></h2>
          <div class="clr"></div>
          <p>we aware about technology thats why we have launched this portal to become member of royal rajputana womens club any rajput women can fill below details and could be a member of odhani(ORWC)</p> 
        </div>
        <div class="article">
          <h2><span>Send us</span>       (Only for womens)</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" placeholder = "Please enter your name*" required />
              </li>
              <li>
                <label for="email">Mobile number</label>
                <input id="email" name="mobile" maxlength = "10" class="text" placeholder = "Please enter your mobile number*"  required/>
              </li>
              <li>
                <label for="email">Address/Thikana</label>
                <input type = "text" id="address" name="address" class="text" placeholder = "please enter your adddress*" required/>
              </li>
              <li>
                <label for="email">Race  (Eg.: sisodiya/shekhawat/rathod/chouhan,shaktawat..etc..)</label>
                <input type = "text" id="race" name="race" class="text" placeholder = "please enter from which race you belongs to*" required/>
              </li>
              
              <li>
                <label for="message">Your Comments</label>
                <textarea id="message" name="message" rows="8" cols="50" placeholder  = "write your comment here here (optional)"></textarea>
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

</html>
