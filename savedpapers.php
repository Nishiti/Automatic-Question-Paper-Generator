<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	include 'registerdb.php';

	$sql="SHOW TABLES from se";
	$fetch=$conn->query($sql);
	
	while($table = $fetch->fetch_assoc())
	{
		echo($table[0] . "<BR>");
	}



/*$result = mysql_query("show tables"); // run the query and assign the result to $result
while($table = mysql_fetch_array($result)) { // go through each row that was returned in $result
    echo($table[0] . "<BR>");    // print the table that was returned on that row.
}*/
?>

</body>
</html>