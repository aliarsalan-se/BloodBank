<html>
<head>
<link href="project.css" type="text/css" rel="stylesheet">
<link href="project.js" type="text/javascript">
</head >
<body>
<div class="main">
<header Style="background-color:white">
    <div>
    <table class="header" cellspacing="0"; cellpadding="0">
        <tbody>
            <tr>
                <td id="hbtn1"  >&nbsp;&nbsp;&nbsp;&nbsp;<a id="logo" href="index.php"><img id="logo" src="Images/logo.png" /></a></td>
                <td id="hbtn"><a href="index.php"><button class="button">Home</button></a></td>
                <td id="hbtn"><a href="index.php"><button class="button">DonorList</button></a></td>
                <td id="hbtn"><a href="index.php"><button class="button">AboutUs</button></a></td>      
                <td id="hbtn"><a href="contactus.php"><button class="button"style="background-color:#880002">ContactUs</button></a></td>
                <td id="hbtn"><a href="register.php"><button class="button">Register</button></a></td>
                <td id="hbtn"><a href="login.php"><button class="button">LogIn</button></a></td>
            </tr>
        </tbody>
    </table>
	</div>
</header>
<hr id="hr">
<header style="background:#F7F5F5">
<center>
<div id="text" ><h3>Contact Form</h3>
<p><bg>
<table id="tmid" border="1" style="border-color:#FA0107">
    <tbody>
        <tr>
            <td style="padding-left:5%; margin-top:0; padding-top:0;" id="text" >
				<form name="contactform" style="font-size:18px" method="post" action="contactus.php">
				   
				    <span> Your Name </span><br>
					<input type="text" size="50" name="name"><br><br>
					<span> Your Email Address/Mobile Number </span><br><br>
					<input type="email" size="50" name="email"><br><br>
					<span> Subject </span><br>
					<input type="text" size="50" name="subject"><br><br>
					<span> Message </span><br>
					<textarea cols="100" rows="6" name="message"></textarea><br>
					<input type="submit" name="submit" class="button" style="width:100px; height:45px" >
					
				</form>
	  </td>
      <td id="sbtd"><br><br><img id="sbimg" src="images/sb1.jpg" alt=""/><br><br><br>
        <img id="sbimg" src="images/sb2.png" alt=""/></td>
    </tr>
  </tbody>
</table>
<footer style="background-color:black; height: 230;">
  <div class="centered clearfix">
    <table width="100%">
      <tr>
        <td width="25%">
          <div class="footer-logo">
             <a href="index.php"> <img style="padding-left: 20 " src="Images/logo.png" width="216" height="133" class="logo"></a>
          </div>
        </td>
        <td width="25%">
          <div style="color: white;">
             <h3>Contact Us</h3>
             <p><a id="ft" href="mailto:abdullah.javed41@yahoo.com">abdullah.javed41@yahoo.com</a></p>
             <p><a id="ft" href="tel:">+92-347-2337742</a></p>
             <p><a id="ft" href="https://www.google.com/maps/place/COMSATS+Institute+of+Information+Technology/@33.6519513,73.156722,18z/data=!4m12!1m6!3m5!1s0x38dfea4aee5bdf8f:0xe6b55e05d462beb1!2sCOMSATS+Institute+of+Information+Technology!8m2!3d33.6518263!4d73.1565933!3m4!1s0x38dfea4aee5bdf8f:0xe6b55e05d462beb1!8m2!3d33.6518263!4d73.1565933"><br />Comsats Institute of Information Technology Islamabad.</a></p>
          </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td width="15%"><div style="color: white;">
          <h3>Pages</h3>
              <ul class="footer-links" style="list-style: none; color: white;">
                <li><a id="ft" href="index.php">Home</a></li>
                <li><a id="ft" href="donorlist.php">Donors list</a></li>
                <li><a id="ft" href="aboutus.php">About Us</a></li>
                <li><a id="ft" href="register.php">Register</a></li>
                <li><a id="ft" href="login.php">Login</a></li>
              </ul>
          </div>
        </td>
        <td width="35%">
          <div style="color: white;" class="social">
            <h3>Social Networks<br><br></h3>
              <a href="https://www.facebook.com/abdullah.ciit/" class="facebook">
                <img  height="50" width="50" src="Images/fb.png">
              </a>
              <a href="https://twitter.com/abdllah_ciit/" class="twitter">
                <img height="50" width="50" src="Images/twi.png">
              </a>
              <a href="https://www.linkedin.com/abdullalhjavid41" class="linkedin">
                <img height="50" width="50" src="Images/li.png">
              </a>
              <a href="https://www.youtube.com/channel/UCC0ZKmwIDCKR2Dht2b6EkAQ" class="youtube">
                <img height="50" width="50" src="Images/you.png">
              </a>
              <a href="https://www.instagram.com/abdullalhjavid/" class="instagram">
                <img height="50" width="50" src="Images/insta.png">
              </a>
              <a href="https://plus.google.com/u/0/111296301862677465813" class="google+">
                <img height="50" width="50" src="Images/li.png">
              </a>
            </div>
        </td>
      </tr>
    </table>
    </div><hr>
     <div class="bottom-bar" style="background-color:black; padding-bottom:5; text-align:center;">
      <span style="color: white;">All Rights Reserved © 2016</span> | <a id="ft" href="aboutus.php">Privacy Policy</a> | <a id="ft" href="aboutus.php">Terms of Service</a>
  </div>
    </div>
  </div>
 <script type="text/javascript">$(function() {
  $('.footer-links-holder h3').click(function () {
    $(this).parent().toggleClass('active');
  });
});
</script>
</footer>
</div>
<!-- PHP starts here to save file -->
<?php
if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];
$file="messages/$sub.txt";
$mf=fopen($file,'w');
$txt="$name \n" ;
fwrite($mf,$txt);
$txt="$email \n";
fwrite($mf,$txt);
$txt="$msg \n";
fwrite($mf,$txt);
fclose($mf);

}
?>
</body>
</head>