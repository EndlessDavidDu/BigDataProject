
<html lang="en">
<head>
<!-- Basic info
================================================== -->
<meta charset="utf-8"> 
<title>Difference Amplifier </title>
<meta name="description" content="Processing">  
<!-- favicons
================================================== -->
<link rel="icon" type="image/png" href="favicon.png">
<!--- CSS
================================================== -->
<link rel="stylesheet" href="css/process.css">

<!-- mobile specific metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-1" onload="Getkey()">

<header>
	<div class="row">
		<div class="main-title-1"><b>Difference Amplifier</b> <img src="images/logo1.png" alt="logo" style="width: 3.5rem;height:3.5rem;"> </div>
		<div class="item row">
			<a href="index.html"><b>home</b></a>
			<a href="mailto: siso8575@colorado.edu" target="_top"><b>contact us</b></a>
		</div>
	</div>
</header>

<main>
        <center>
        <p>Processing... Please Wait... </p >
        <?php
                $key1 = $_REQUEST['key1'];
                $key2 = $_REQUEST['key2'];
                echo 'Your keywords are "' . $key1 .'" and "' . $key2 . '". ';
                $val = shell_exec("python ./python/tweeter_api.py $key1 $key2");
                echo $val;
        ?>
        </center>
</main>

<footer>
	<p>Copyright © 2018-2019 FantasticFive </p>
	<p> - All  rights reserved. </p>
</footer>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- JavaScript-->
<script src="js/key.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>
