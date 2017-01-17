<html>
<head>
  
  <link href="login.css" type="text/css" rel="stylesheet">
  <link href="project.css" type="text/css" rel="stylesheet">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
                <td id="hbtn"><a href="donorlist.php"><button class="button">DonorList</button></a></td>
                <td id="hbtn"><a href="aboutus.php.php"><button class="button">AboutUs</button></a></td>      
                <td id="hbtn"><a href="contactus.php"><button class="button">ContactUs</button></a></td>
                <td id="hbtn"><a href="register.php"><button class="button">Register</button></a></td>
                <td id="hbtn"><a href="login.php"><button class="button"style="background-color:#880002">LogIn</button></a></td>
            </tr>
        </tbody>
    </table>
	</div>
</header>
<hr id="hr">
<header style="background:#F7F5F5">
<center>
<div id="text" ><h3>Log in to Update Your Information</h3>
<center>
<loginbg>
    
	<div class="login"  id="text">
      <form method="post">
			Mob. Number	: 
			  <input type="text" placeholder="username" name="user">
			  <br><br><br>
			Password	  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="password" placeholder="password" name="password">
			<br><br><br>
      <form action="login.php" method="post"><input type="submit" value="Login" name="login"></form>
				
                <p><a href="register.php" ><h6>Not registered? Get registered and save a life</h6></a></p>
                </form>
                </div>
		
      </center>
      </loginbg>  
	</p>
  <!-- PHP started -->
<?php
include('config.php');
if(isset($_POST['login'])){

  $mob=$_POST["user"];
  $pswrd=$_POST["password"];
  $password="";
  $sql="SELECT password from donors where mob = '".$mob."'" ;
  $result=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) 
    {
      $password = $row['password']; // password is retreived for the entered username
      if($pswrd == $password)
        {
          header("location: update.php?mob=".$mob);
          //$query = http_build_query($_POST);
          //header("location: home.php?".$query);
          //$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
          //header("location: home.php?username=$username"); // redirects the user to the authenticated home page
          
        }
      else
      {
        Print '<script>alert("Incorrect password")</script>;'; 
      }
  }
    }
   else
    print '<script> alert("wrong username")</script>';

}

?>
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
</header>

</div></div>

</body>
</html>