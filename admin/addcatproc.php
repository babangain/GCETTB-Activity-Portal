<html>
<head><title>GCETTB Admin Panel :: Home </title>
<style>
	body{
		align-content: center;
		text-align: center;
	}
	


</style>
</head>

<body style="background-color:yellow">


<?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
<?php
	$name=$_POST['name'];
	$fullname=$_POST['fullname'];
	$description=$_POST['description'];
	$sql="INSERT into category (name,fullname,about) VALUES ('$name','$fullname','$description')";
	if(mysqli_query($conn,$sql)){
		echo "Category Added to List of Category";
	}
		$sql="CREATE TABLE $name
AS (SELECT * FROM iif WHERE 1=2);";
	
	
	
	
	if(mysqli_query($conn,$sql)){
		echo "<br>Table Created For Category";
	}	
	$sql="ALTER TABLE $name
  ADD PRIMARY KEY (slno),
  ADD UNIQUE KEY slno (slno);";
	if(mysqli_query($conn,$sql)){
		echo "<br>Primary Key SET";
	}
	$sql="ALTER TABLE $name
  MODIFY slno int(5) NOT NULL AUTO_INCREMENT;";
	if(mysqli_query($conn,$sql)){
		echo "<br/>Auto Increment Value Adjusted";
	}
	mkdir("../$name");
	echo "<br/>Folder created with Category Name"
	?>
	<h1><a href="adminhome.php">Go To HOME</a></h1>