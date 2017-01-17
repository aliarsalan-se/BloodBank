<html>
<body>
<?php
//include('config.php');
/*$name=$_POST["name"];
$mob=$_POST["mob"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$blood=$_POST["btype"].$_post["rhtype"];
$pay=$_POST["payment"];
$price=0;
$price=(int)$_POST["price"];
$disease="no disease";
$disease=$_POST["disease"];
$date="Empty";
$date=$_POST["date"];
$city=$_POST["city"];*/
//$sql = "INSERT INTO donors (name,mob,email,gender,blood,pay,price,city,disease,date)
//VALUES ('$name','$mob','$email', '$gender','$blood','$pay',$price,'$city','$disease','$date')";
$btype="A";
$rhtype="+";
$blood=$btype.$rhtype;

//if (mysqli_query($conn, $sql)) {
  //  $Last_id=mysqli_insert_id($conn);
	echo "$blood";
//} //else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

//mysqli_close($conn);

?>
</body>
</html>