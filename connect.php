<?php
include 'registerdb.php';
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$cn=$_POST["phno"];
$dept=$_POST["department"];
$password=$_POST["pwd1"];
$count=0;
$id=0;
$qu="select * from user";
$fetch=$conn->query($qu);
//echo "$fn";
if ($fetch->num_rows > 0)
{
	while($row=$fetch->fetch_assoc())
	{
		$id=$row['id'];
	}
	$id++;
}
else
	{
	$id=1;
	}
	

$sql = "INSERT INTO user(id,fname,lname,month,day,year,gender,email,contact,dept,password) values('$id','$fn','$ln','$month','$day','$year','$gender','$email','$cn','$dept','$password')";
//$count=$conn->query($qu);
if ($conn->query($sql) === TRUE) {
    //echo "\nRegistration successful";
    include 'index.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//echo "$count";
/*if($count==1)
{
echo '<script type="text/javascript">alert("Registration Success!");</script>';
include 'register.php';
}
else
{
echo '<script type="text/javascript">alert("Registration Failed! Please try again.");</script>';
include 'register.php';
}*/


//if($count!=1)

?>
