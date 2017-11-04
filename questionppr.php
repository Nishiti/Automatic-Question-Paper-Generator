<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	$title=$_SESSION["title"];
	include 'registerdb.php';
$num=$_POST["question"];
//echo "$num";
$qu="select * from questions";
$fetch=$conn->query($qu);
//echo "$fn";
if ($fetch->num_rows > 0)
{
	while($row=$fetch->fetch_assoc())
	{
		$id=$row['id'];
		//echo "$id";
		if($num==$id)
		{
			$fid=$id;
			$ques=$row['ques'];
			$marks=$row['marks'];
		}
	}
}

$sql="INSERT INTO $title values('$fid','$ques','$marks')";	
$insert=$conn->query($sql);

include 'nextques.php';

?>
</body>
</html>