<html>
<head>
	<link href="project.css" type="text/css" rel="stylesheet">
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
   <script src="register.js" type="text/jscript"></script>
</head>
</head>
<body>
<?php
include('config.php');
$mob= $_REQUEST['mob'];
$sql="SELECT name,password,email,blood,gender,pay,price,city,disease,date FROM donors where mob ='".$mob."'";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) 
		{
			$name=$row['name'];
			$blood=$row['blood'];
			$gender=$row['gender'];
			$pswrd=$row['password'];
			
			$email=$row['email'];
			
			$pay=$row['pay'];
		
			$price=$row['price'];
		
			$disease=$row['disease'];
			
			$date=$row['date'];
			$city=$row['city'];

			}
if(isset($_POST['submit'])){
$name=$_POST["name"];
$pswrd=$_POST["password"];
$email=$_POST["email"];
$pay=$_POST["payment"];
$price=0;
$price=(int)$_POST["price"];
$disease="no disease";
$disease=$_POST["disease"];
$date="Empty";
$date=$_POST["date"];
$city=$_POST["city"];
$sql="UPDATE donors set name='$name' , password='$pswrd' ,email='$email' , pay='&pay' ,price=$price,disease='$disease',date='$date',city='$city'
        where mob='$mob'";
        if(mysqli_query($conn,$sql)){
	          echo '<script> alert("Record updated Succesfuly") </script>';
	          echo '<script> window.location.href="index.php";</script>';
	          
}
else
	 header('location:login.php');
}

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
<div id="text" ><h3>Update Information</h3>
<center><bg>
<p><table>
<tr>
<td><!-- Registration Form-->
<form  name="reg_form" method="post" id="text" style="font-size:18px" onsubmit= "return (validate())" action="update.php">
  <p>
    <label for="name">Name :</label>
    <input name="name" type="text" id="name" size="30" required value="<?php echo"$name";?>"><sup>&nbsp;* 
  </p><p id="name1"> </p>
  <label for="gender">Gender:</label>
<input name="textfield" type="text" disabled="disabled" required="required" id="textfield" size="10" readonly value="<?php echo"$gender";?>">
    
  </p>
  <p><br>
    <label for="mob">Mobile Number :</label>
    <input name="mob" type="text" id="mob" size="30" required value="<?php echo"$mob";?>">&nbsp;<sup>*
  </p>
  <p><br>
  <label for="password">Password :</label>
    <input name="password" type="text" id="password" size="30" value="<?php echo"$pswrd"?>" required >&nbsp;<sup>*
  </p>
  <p> <label for="bloodgroup">Blood Group:</label>
<input name="textfield" type="text" disabled="disabled" required="required" id="textfield" size="10" readonly value="<?php echo"$blood";?>">
    
  </p>
  <p>Donate or on Payment :</p>
  <p>
  <?php
  if($pay=='Free'){
    echo '<label>
      <input type="radio" name="payment" value="Free" id="payment_0" checked="checked">
      Free</label>
    <br>
     <label>
      <input type="radio" name="payment" value="OnPayment" id="payment_1">
      On Payment</label>
    
    ';}
    else
    	echo '
      <input type="radio" name="payment" value="Free" id="payment_0" >
      Free</label>
    <br>
    <label>
      <input type="radio" name="payment" value="OnPayment" id="payment_1" checked="checked">
      On Payment</label>
   ';
 ?>
  <br>
    <label for="payment">Price(if on payment):</label>
    <input name="price" type="text" id="payment" size="15" value="<?php echo"$price"?>"> 
 </p>
  <p>
    <label for="disease">Blood Disease (if any):</label>
  </p>
  <p>
    <textarea name="disease" id="disease" cols="25" rows="3" value="<?php echo"$disease"?>"></textarea>
    <br>
    <br>
    <label for="date">Last time blood donated (Date):</label>
    <input type="date" name="date" id="date" value="<?php echo"$date"?>">
  </p>
  <p>
    <label for="city">Current Location :</label>
    <select name="city" style="height: 25px; ">
              <option>-select city-</option>
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Alipurchatha">Alipurchatha</option>
              <option value="Allahabad">Allahabad</option>
              <option value="Anchorage">Anchorage</option>
              <option value="Arif wala">Arif wala</option>
              <option value="Bahawal Nagar">Bahawal Nagar</option>
              <option value="Bakhar">Bakhar</option>
              <option value="Askoley">Askoley</option>
              <option value="Attock">Attock</option>
              <option value="Azadkashmir">Azadkashmir</option>
              <option value="Badain">Badain</option>
              <option value="Bagh">Bagh</option>
              <option value="Balochabad">Balochabad</option>
              <option value="Battagram">Battagram</option>
              <option value="Bannu">Bannu</option>
              <option value="Bhadurabad">Bhadurabad</option>
              <option value="Bhalwal">Bhalwal</option>
              <option value="Bhawalnagar">Bhawalnagar</option>
              <option value="Bhawalpur">Bhawalpur</option>
              <option value="Burewala">Burewala</option>
              <option value="Chaghi">Chaghi</option>
              <option value="Chakwal">Chakwal</option>
              <option value="Charsadda">Charsadda</option>
              <option value="Chicha Watni">Chicha Watni</option>
              <option value="Chilas">Chilas</option>
              <option value="Chiniot">Chiniot</option>
              <option value="Chishtian">Chishtian</option>
              <option value="Chitral">Chitral</option>
              <option value="Dadu">Dadu</option>
              <option value="Daska">Daska</option>
              <option value="Dera Bhugti">Dera Bhugti</option>
              <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
              <option value="Dera Ismail Khan">Dera Ismail Khan</option>
              <option value="Faisalabad">Faisalabad</option>
              <option value="Fayetteville">Fayetteville</option>
              <option value="Ghizer">Ghizer</option>
              <option value="Ghotki">Ghotki</option>
              <option value="Gilgit">Gilgit</option>
              <option value="Gojra">Gojra</option>
              <option value="Gujranwala">Gujranwala</option>
              <option value="Hafiz Abad ">Hafiz Abad </option>
              <option value="Harappa">Harappa</option>
              <option value="Haripur">Haripur</option>
              <option value="Haroonabad">Haroonabad</option>
              <option value="Hasilpur">Hasilpur</option>
              <option value="Hattar">Hattar</option>
              <option value="Hayatabad">Hayatabad</option>
              <option value="Hazara">Hazara</option>
              <option value="Hyderabad">Hyderabad</option>
              <option value="Islamabad">Islamabad</option>
              <option value="Jaccobabad">Jaccobabad</option>
              <option value="Jamrud">Jamrud</option>
              <option value="jamshoro">jamshoro</option>
              <option value="Jandola">Jandola</option>
              <option value="jjnygnyghn">jjnygnyghn</option>
              <option value="Joharabad">Joharabad</option>
              <option value="Kabal">Kabal</option>
              <option value="Kahuta">Kahuta</option>
              <option value="Kalat">Kalat</option>
              <option value="Kamalia">Kamalia</option>
              <option value="Kamonki">Kamonki</option>
              <option value="Kamra Kalan">Kamra Kalan</option>
              <option value="Kandhura">Kandhura</option>
              <option value="Karachi">Karachi</option>
              <option value="Karak">Karak</option>
              <option value="Kashmore">Kashmore</option>
              <option value="Kasur">Kasur</option>
              <option value="Khairian">Khairian</option>
              <option value="Khairpur">Khairpur</option>
              <option value="Khanewal">Khanewal</option>
              <option value="Khanpur">Khanpur</option>
              <option value="Khaplu">Khaplu</option>
              <option value="Khoshab">Khoshab</option>
              <option value="Khuzdar">Khuzdar</option>
              <option value="Khyber ">Khyber </option>
              <option value="Killa saifullah">Killa saifullah</option>
              <option value="Kohat">Kohat</option>
              <option value="Kotlie">Kotlie</option>
              <option value="Lahore">Lahore</option>
              <option value="Laki Marwat">Laki Marwat</option>
              <option value="Lala Musa">Lala Musa</option>
              <option value="Landi Kotal">Landi Kotal</option>
              <option value="Larkana">Larkana</option>
              <option value="Lasbela">Lasbela</option>
              <option value="Layyah">Layyah</option>
              <option value="Liaqatabad">Liaqatabad</option>
              <option value="Lodhran">Lodhran</option>
              <option value="M.Bhaudin">M.Bhaudin</option>
              <option value="Malakand">Malakand</option>
              <option value="Manga Mandi">Manga Mandi</option>
              <option value="Mansehra">Mansehra</option>
              <option value="Mardan">Mardan</option>
              <option value="Margla">Margla</option>
              <option value="Mastung">Mastung</option>
              <option value="Mian Channon">Mian Channon</option>
              <option value="Mianwali">Mianwali</option>
              <option value="Miran Shah">Miran Shah</option>
              <option value="Mirpur">Mirpur</option>
              <option value="Multan">Multan</option>
              <option value="Muredke">Muredke</option>
              <option value="Muridke">Muridke</option>
              <option value="Murree">Murree</option>
              <option value="Muzafferabad">Muzafferabad</option>
              <option value="Muzaffergarh">Muzaffergarh</option>
              <option value="Nankanasahib">Nankanasahib</option>
              <option value="Narangmandi">Narangmandi</option>
              <option value="Narowal">Narowal</option>
              <option value="Nathiagali">Nathiagali</option>
              <option value="Nawabshah">Nawabshah</option>
              <option value="Noshehra">Noshehra</option>
              <option value="Noshki">Noshki</option>
              <option value="Okara">Okara</option>
              <option value="Others">Others</option>
              <option value="Pakpatan">Pakpatan</option>
              <option value="parachinar">parachinar</option>
              <option value="Patoki">Patoki</option>
              <option value="Peshawer">Peshawer</option>
              <option value="Pirmehal">Pirmehal</option>
              <option value="Quaidabad">Quaidabad</option>
              <option value="Quetta">Quetta</option>
              <option value="Rahim Yar Khan">Rahim Yar Khan</option>
              <option value="Raiwind">Raiwind</option>
              <option value="Rawalpindi">Rawalpindi</option>
              <option value="Rawlakot">Rawlakot</option>
              <option value="Sadiqabad">Sadiqabad</option>
              <option value="Sahiwal">Sahiwal</option>
              <option value="Sakardu">Sakardu</option>
              <option value="Samundri">Samundri</option>
              <option value="SHAHDADPUR">SHAHDADPUR</option>
              <option value="Shaikhupura">Shaikhupura</option>
              <option value="Sharqpur">Sharqpur</option>
              <option value="Sibbi">Sibbi</option>
              <option value="Sudhnuti">Sudhnuti</option>
              <option value="Swabi">Swabi</option>
              <option value="Swat">Swat</option>
              <option value="Tandlianwala">Tandlianwala</option>
              <option value="Tandojam">Tandojam</option>
              <option value="Taxila">Taxila</option>
              <option value="Thatta">Thatta</option>
              <option value="Toba tek Singh">Toba tek Singh</option>
              <option value="Topi">Topi</option>
              <option value="Torkam">Torkam</option>
              <option value="Turbat">Turbat</option>
              <option value="Uthal">Uthal</option>
              <option value="Wah Cantt">Wah Cantt</option>
              <option value="Wanna">Wanna</option>
              <option value="Wazirabad">Wazirabad</option>
              <option value="Zhob">Zhob</option>
              <option value="Ziarat">Ziarat</option>
            </select>&nbsp; <sup>*
  </p>
  <p>
 
    <input name="submit" type="submit"  class="button"  value="Update" style="width:100px">
    
  </p><p style="font-size:15px">* these fields are mendatory to be filled </p>
</form>
</td>
  
</bg></center>
	</p>
</center>

</header>
<div >
<footer height: 230;>
  <div class="centered clearfix" >
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
  </footer>
</div>
 <script type="text/javascript">$(function() {
  $('.footer-links-holder h3').click(function () {
    $(this).parent().toggleClass('active');
  });
});
</script>
</body>
</html>