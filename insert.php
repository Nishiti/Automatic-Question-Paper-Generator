<?php
include 'registerdb.php';

$ques=$_POST["ques"];
$marks=$_POST["marks"];
$comp=$_POST["comp"];
$sub=$_POST["sub"];
$module=$_POST["module"];
$check=$_POST["check"];
$count=0;
$id=0;
$qu="select * from questions";
$fetch=$conn->query($qu);
//echo "$fn";
if ($fetch->num_rows > 0)
{
	while($row=$fetch->fetch_assoc())
	{
		$id=$row['id'];
	}
	$id++;
	//echo $id;
}
else
	{
	$id=1;
	//echo $id;
	}

$sql = "INSERT INTO questions values('$id','$ques','$sub','$module','$comp','$marks')";
//$count=$conn->query($qu);
if ($conn->query($sql) === TRUE) {
    //echo "\nRegistration successful";
    include 'aftlogin.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if($check!=1)
{
	include 'insertques.php';
}

/*

$qu="select * from questions";
$fetch=$conn->query($qu);
$sql = "INSERT INTO questions (id,ques,sub,mod,com,marks) values ('$id','$ques','$sub','$module','$comp','$marks')";
$count=$conn->query($sql);
if ($count === TRUE) {
    //echo "\nRegistration successful";
    //echo $id;
    //include 'insertques.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>