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