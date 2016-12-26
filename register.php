<html>
<head>
<link href="project.css" type="text/css" rel="stylesheet">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
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
<header style="background:#F7F5F5">
<center>
<div id="text" ><h3>Get Registered And Save a Life</h3>
<center><bg>
<p><table>
<tr>
<td><!-- Registration Form-->
<form  name="reg_form" method="post" id="text" style="font-size:18px">
  <p>
    <label for="name">Name :</label>
    <input name="name" type="text" id="name" size="30"><sup>&nbsp;*
  </p>
  <p>Gender:&nbsp<sup>&nbsp;*  
  
    <label>
      <input type="radio" name="gender" value="Male" id="gender_0">
      Male</sup></label>
    <br>
    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;
      <input type="radio" name="gender" value="Female" id="gender_1">
      Female</label>
    <br>
  <label for="email">Email address (optional):</label>
    <input type="text" name="email" id="user_name">
  </p>
  <p>
    <label for="mob">Mobile Number :</label>
    <input name="mob" type="text" id="mob" size="30">&nbsp;<sup>*
  </p>
  <p>Blood Group :
    <select name="btype" id="btype">
      <option value="null">Select</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select> 
    Rh:
    <select name="rhtype" id="rhtype">
      <option value="null">Select</option>
      <option value="+">+</option>
      <option value="-">-</option>
    </select>&nbsp; <sup>*
  </p>
  <p>
    <label for="date">Last time blood donated (Date):</label>
    <input type="date" name="date" id="date">
  </p>
  <p>
    <label for="city">Current Location :</label>
    <input type="text" name="city" id="city">&nbsp; <sup>*
  </p>
  <p>
    <input type="checkbox" name="terms" id="terms">
  I have read the terms and condition<br>&nbsp;&nbsp;&nbsp;&nbsp; mentioned just on left side of the screen.</p>
  <p>
    <input name="submit" type="submit"  class="button" form="reg_form" formmethod="POST" value="Submit" style="width:100px">
    <input type="reset" name="reset" id="reset" value="Reset" class="button" style="width:100px;">
  </p>
</form>
</td>
<td style="align-content:stretch; padding-left:8%; padding-right:5%" id="text" align="center" valign="top"><h1 style="font-size:30px"><center> Terms And Conditions</center> </h1>
<p style="font-size:18px">
The website is solely made for public good it does not gaurantee how will people use it.<br>whenever someone you contacts you make sure to meet them at safe place for blood donation.<br> we do not gaurantee that the needy person will be genuinely in need.<br>
</td>
</tr></table>  
</bg></center>
	</p>
</center>
</header>
</body>
</html>