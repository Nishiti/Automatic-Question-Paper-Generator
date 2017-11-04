<?php
$un=$_POST["t1"];
$pw=$_POST["t2"];
include 'registerdb.php';
$check=0;
$q="select * from user";
$fetch1=$conn->query($q);

while($row=$fetch1->fetch_assoc())
{

$id=$row['id'];
$username=$row['email'];
$password=$row['password'];
if($un==$username && $pw==$password)
{
$check=1;

$_SESSION['user'] = $id;
  $_SESSION['password'] = $password;

}
}
//echo $check;

if($check==1)
{
echo '<script type="text/javascript">alert("Login Success!");</script>';
include 'aftlogin.php';
}
else
{
echo '<script type="text/javascript">alert("Login Failed! Please try again.");</script>';
include 'index.html';
}
?>
