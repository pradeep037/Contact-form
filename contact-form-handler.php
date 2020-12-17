<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body style="background:linear-gradient(rgb(255, 250, 240),rgba(0,0,50,0.5));
">>

	<h1>Thank you!</h1>
	
	<p> <?php echo $_POST["Title"]." ".$_POST["Firstname"]." ".$_POST["Lastname"]; ?>

	<p>You have submitted the following details:</p>	
	
	<p>Your Date of Birth is: <?php echo $_POST["DOB"]; ?></p>
	
	<p>Your Phone number is: <?php echo $_POST["phone"]; ?></p>
	
	<p>Your Uploaded file is: <?php echo $_POST["myfile"]; ?></p>

	<p>Your Email address is: <?php echo $_POST["Email"]; ?></p>
	
	<p>Your Message is: <?php echo $_POST["Message"]; ?></p>
	
	

</body>
</html>