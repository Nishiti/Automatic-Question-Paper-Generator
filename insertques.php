<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
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

	<title></title>
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
 <h2>Insert the Question with parameters:</h2>
<form method="post" action="insert.php">
	<!--<textarea name="ques" id="ques" cols="40" rows="5" placeholder="Enter the question here"></textarea>-->
	<input type="text" name="ques" id="ques" placeholder="Enter Question" required style="color:grey;">
	<br>

	<select name="marks" id="marks" placeholder="marks" required style="color:grey;">
		<option value="na">Marks</option>
		<option value="2">2</option>
		<option value="5">5</option>
		<option value="8">8</option>
		<option value="10">10</option>
	</select>
	<br>
	<select name="comp" id="comp" placeholder="complexity" required style="color:grey;">
		<option value="na">Complexity</option>
		<option value="easy">Easy</option>
		<option value="mod">Moderate</option>
		<option value="diff">Difficult</option>
	</select>
	<br>
	<select name="sub" id="sub" placeholder="Select Subject" required style="color:grey;">
		<option value="na">Subject</option>
		<option value="ds">DS</option>
		<option value="se">SE</option>
		<option value="sws">SWS</option>
		<option value="dmbi">DMBI</option>
		<option value="ait">AIT</option>
	</select>
	<br>
		

	<select name="module" id="module" placeholder="Module" required style="color:grey;">
		<option value="na">Module</option>
		<option value="one">1</option>
		<option value="two">2</option>
		<option value="three">3</option>
		<option value="four">4</option>
		<option value="five">5</option>
	</select>
<br>
	<input type="hidden" name="check" value="0" />
	<input type="checkbox" name="check" id="check" value="1">No more questions to add
	<br>

	<input type="submit" value="Add another Question" style="color:black; margin-top: 10px;">

</form>
</div>
</div>
</body>
</html>