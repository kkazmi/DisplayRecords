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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<link rel="icon" href="http://www.nodwingaming.com/nodwingaming.com/wp-content/uploads/2017/04/cropped-100x100-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="http://www.nodwingaming.com/nodwingaming.com/wp-content/uploads/2017/04/cropped-100x100-180x180.png" />
</head>
<body>
<?php 


$conn =mysqli_connect('localhost','root','', 'display'); 
if(@$_GET['del']){
	$query="delete from records where Srno='$_GET[del]'";
	$mysqli=mysqli_query($conn,$query);
}
if(@$_GET['ascs']==1){
	$query = "SELECT * FROM `records` ORDER BY `records`.`Srno` ASC";
}
elseif(@$_GET['ascs']==2){
	$query = "SELECT * FROM `records` ORDER BY age ASC";
}else{
	$query = "SELECT * FROM `records` ORDER BY `records`.`Srno` ASC";
}
 
?>
<div class="nodwin-view"> 
	<div class="bg-layer">
		<h1>NODWIN DISPLAY RECORD </h1>
		<div class="header-display">
			<div class="main-icon">
				<img src="images/logo.png" alt="logo NODWIN">
			</div>
			<div class="header-left-bottom">				
			<table  id="dtBasicExample" class="table" style="color: #fff !important">
			    <thead>
			      <tr>
			        <th>Sr. No.</th>
			        <th>Person Name </th>
			        <th>Age of Person</th>
			        <th>E-Mail Address</th>
			        <th>City Address</th>
			        <th>Delete</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php $show=mysqli_query($conn,$query); 
			    	while($data=mysqli_fetch_assoc($show)){ ?>
			      <tr>
			        <td><?php echo $data['Srno']?></td>
			        <td><?php echo $data['name']?></td>
			        <td><?php echo $data['age']?></td>
			        <td><?php echo $data['email']?>m</td>
			        <td><?php echo $data['city']?></td>
			         <td><a style="color: Red" href="display.php?del=<?php echo $data['Srno']?>">Delete</td>
			      </tr>
			     <?php }?>
			    </tbody>
			  </table>
			</div>
			<div class="bottom">
				<a href="display.php?ascs=1" class="btn nodwinbtn" style="color:#fff"  >Ascending Name</a>
				<a  href="display.php?ascs=2" class="btn nodwinbtn right" style="color:#fff" >Ascending Age </a><br>						
			</div>
			<a  href="index.php" style="color:#fff">Record Page </a><br>	
		</div>
	</div>
</div>	

<!-- //main -->

</body>
</html>