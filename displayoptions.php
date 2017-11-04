<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUTOMATIC QUESTION PAPER GENERATOR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="aftlogin.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">Home</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="insertques.php">Questions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="form.html">Generate Paper</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <div class="row" style="margin-top: 150px; align: center ">
 <div class="col-lg-8 col-lg-offset-2">
 <h2>Select the appropriate question:</h2>
<form name='myform' action='questionppr.php'  method='post'>
<?php
include 'registerdb.php';

$rmod=$_POST["mod"];
$rsub=$_POST["sub"];
$rcomp=$_POST["comp"];
$rmarks=$_POST["marks"];

$id=0;
$qu="select * from questions";

$fetch=$conn->query($qu);
//echo "$fn";
if ($fetch->num_rows > 0)
{
	while($row=$fetch->fetch_assoc())
	{
		$id=$row['id'];
		$ques=$row['ques'];
		$mod=$row['mod'];
		$sub=$row['sub'];
		$comp=$row['com'];
		$marks=$row['marks'];

		if($rmod==$mod && $rsub==$sub && $rcomp==$comp && $rmarks==$marks)
		{
			?>

	
	<input type="radio" name="question" value="<?php echo $id; ?>"><?php echo "$ques<br>"?>
<?php
		}
}

}
?>

<input type="submit" id="btn" value="Submit" style="color:black; margin-top: 10px;">
</form>
</body>
</html>
<?php
//include 'nextques.php';
?>
