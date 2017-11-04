<?php
	include 'registerdb.php';

session_start();
$tot=$_POST["total"];
$noq=$_POST["noq"];
$title=$_POST["title"];
$_SESSION["noq"] = $noq;
$_SESSION["title"] = $title;


$sql = "CREATE TABLE $title (id INT PRIMARY KEY, question VARCHAR(100) NOT NULL, marks int NOT NULL)";

if (mysqli_query($conn, $sql)) {
    //echo "Question Paper created successfully";
} else {
    echo "Error creating paper: " . $conn->error;
}

 include "nextques.php";

?>