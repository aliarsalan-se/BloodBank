<html>
<head>
<link href="project.css" type="text/css" rel="stylesheet">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
   <script src="register.js" type="text/jscript"></script>
   </head>
  <body>
  <?php
include('config.php');
$name=$_POST["name"];
$mob=$_POST["mob"];
$pswrd=$_POST["password"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$blood1=$_POST["btype"];
$blood2=$_POST["rhtype"];
$blood=$blood1.$blood2;
$pay=$_POST["payment"];
$price=0;
$price=(int)$_POST["price"];
$disease="no disease";
$disease=$_POST["disease"];
$date="Empty";
$date=$_POST["date"];
$city=$_POST["city"];
$sql = "INSERT INTO donors (name,mob,password,email,gender,blood,pay,price,city,disease,date)
VALUES ('$name','$mob','$pswrd' , '$email', '$gender','$blood','$pay',$price,'$city','$disease','$date')";

if (mysqli_query($conn, $sql)) {
    $Last_id=mysqli_insert_id($conn);
    echo "connected";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);   
   ?>


 <div class="container">
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
                <td id="hbtn"><a href="contactus.php"><button class="button">ContactUs</button></a></td>
                <td id="hbtn"><a href="register.php"><button class="button" style="background-color:#880002">Register</button></a></td>
                <td id="hbtn"><a href="login.php"><button class="button">LogIn</button></a></td>
            </tr>
        </tbody>
    </table>
	</div>
</header>
<hr id="hr">
<header style="background:#F7F5F5">
<center>
<div id="text" ><h3>Thank you <?php echo "$name"; ?> for getting registered !</h3>
<center><bg>
<p><table>
<tr>
<td>
<h2 id="text"> Your given info is : </h2>
<p>
<form  name="form1" method="post" id="text" style="font-size:18px">

  <p >
    <label for="name">Name :</label>
    <input name="name" type="text" disabled="disabled" id="name" size="40" value="<?php echo "$name"; ?>">
    <label for="mob">Mobile Number :</label>
    <input name="mob" type="text" disabled="disabled" id="mob" size="40" value="<?php echo "$mob"; ?>">
  </p>
  <p>
    <label for="textfield">Email :</label>
    <input name="textfield" type="text" disabled="disabled" id="textfield" size="50" value="<?php echo "$email"; ?>">
    <label for="gender">Gender :</label>
    <input name="gender" type="text" disabled="disabled" id="gender" size="6" value="<?php echo "$gender"; ?>">
     <label for="blood">Blood Group:</label>
    <input name="blood" type="text" disabled="disabled" id="blood" value="<?php echo "$blood"; ?>">
  </p>
  <p>
    <label for="textfield2">City (current Location):</label>
    <input name="textfield2" type="text" disabled="disabled" id="textfield2" value="<?php echo "$city"; ?>">
    <label for="price">Price if any :</label>
    <input name="price" type="text" disabled="disabled" id="price" value="<?php echo "$price"; ?>">
  </p>
  <p>
    <label for="disease">Diseas (if any) :</label>
    <input name="disease" type="text" disabled="disabled" id="disease" size="60" value="<?php echo "$disease"; ?>">
    <label for="date">Last time Blood Donated :</label>
    <input name="date" type="text" disabled="disabled" id="date" value="<?php echo "$date"; ?>"><br><br>
    Log In to Update your Information ! <br>
    <a href="login.php"><input name="Log In" type="button" class="button" value="LogIn"></a> 

  </p>
  <p>&nbsp;</p>

</form>
</p>
</td>

</tr></table>  
</bg></center>
	</p>
</center>
<footer style="background-color:black; height: 250;">
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
  </body>
  </html>