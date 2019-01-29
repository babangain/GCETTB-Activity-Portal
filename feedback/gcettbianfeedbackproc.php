<!DOCTYPE html>
<html>
<?php
	require '../conn.php';
	require '../browser.php';
	$name=" ";
	$yop=" ";
	$dept=" ";
	$mob=" ";
	$email=" ";
	$org=" ";
	$desig=" ";
	$address=" ";
	$comment=" ";
	if(isset($_POST['name'])){
		$name=$_POST['name'];
	}
	if(isset($_POST['yop'])){
		$yop=$_POST['yop'];
	}
	if(isset($_POST['dept'])){
		$dept=$_POST['dept'];
	}
	if(isset($_POST['mob'])){
		$mob=$_POST['mob'];
	}
	if(isset($_POST['email'])){
		$email=$_POST['email'];
	}
	if(isset($_POST['org'])){
		$org=$_POST['org'];
	}
	if(isset($_POST['desig'])){
		$desig=$_POST['desig'];
	}
	if(isset($_POST['address'])){
		$address=$_POST['address'];
	}
	if(isset($_POST['comment'])){
		$comment=$_POST['comment'];
	}
	$name=mysqli_real_escape_string($conn,$name);
	$yop=mysqli_real_escape_string($conn,$yop);
	$dept=mysqli_real_escape_string($conn,$dept);
	$mob=mysqli_real_escape_string($conn,$mob);
	$email=mysqli_real_escape_string($conn,$email);
	$org=mysqli_real_escape_string($conn,$org);
	$desig=mysqli_real_escape_string($conn,$desig);
	$address=mysqli_real_escape_string($conn,$address);
	$comment=mysqli_real_escape_string($conn,$comment);
	
	
	?>
	<?php
		$sql="INSERT INTO gcettbianfeedback (name,yop,dept,mob,email,org,desig,address,comment,browser,version,os,date,ip) VALUES ('$name','$yop','$dept','$mob','$email','$org','$desig','$address','$comment','$browser','$version','$os','$date','$ip')";
	if(mysqli_query($conn,$sql))
	{
		;
	}
	else {
		echo "An Error Occureed. Please Try Later";
	}
		
		?>

<head>
     <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK Confirmation</title>
    <link rel="stylesheet" href="assetsconfirm/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsconfirm/css/styles.css">
</head>

<body><img src="assetsconfirm/img/finalfinal bnr.jpg" id="clgbannr"><img src="assetsconfirm/img/updtcnf.jpg" id="cnf">
    <script src="assetsconfirm/js/jquery.min.js"></script>
    <script src="assetsconfirm/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>