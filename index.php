<!DOCTYPE html>
<html>
<head>
<title>NODWIN DISPLAY RECORD</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="NODWIN DISPLAY RECORD" />
	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<link rel="icon" href="http://www.nodwingaming.com/nodwingaming.com/wp-content/uploads/2017/04/cropped-100x100-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="http://www.nodwingaming.com/nodwingaming.com/wp-content/uploads/2017/04/cropped-100x100-180x180.png" />
</head>
<body>
<?php
@$name = $_POST['name'];
@$age = $_POST['age'];
@$email = $_POST['email'];
@$city = $_POST['city'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "display";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO records (Srno   ,name ,  age   , email  ,city)
VALUES ('', '$name', '$age', '$email', '$city')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<div class="nodwin-view"> 
	<div class="bg-layer">
		<h1>NODWIN DISPLAY RECORD </h1>
		<p> Enter Your Record </p>
		<div class="header-main">
			<div class="main-icon">
				<img src="images/logo.png" alt="logo NODWIN">
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" name="name" placeholder="Person Name Ex. Joen Cina" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-child"></span>
						<input type="number" name="age" placeholder="Age of Person Ex. 12" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-envelope-open"></span>
						<input type="email" name="email" placeholder="E-Mail Ex. abc@nodwin.com" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-building"></span>
						<input type="text" name="city" placeholder="City Name Ex. Gurgoan" required=""/>
					</div>
					<div class="bottom">
						<button class="btn nodwinbtn"  type="reset" value="Reset" >Reset</button>
						<button class="btn nodwinbtn right" type="submit" value="Submit" >Summit </button><br>						
					</div>
					<div class="links">
						<p><a href="#">Reset</a></p>
						<p class="right"><a href="display.php">Display Records</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>	
<!-- //main -->

</body>
</html>