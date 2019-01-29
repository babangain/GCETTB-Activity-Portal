<html>
<head><title>Change Password</title>
<style>
h2, h3 {
align:center;
} 
body{
		text-align: center;
		align-content: center;
		background-color: lightgreen;
	}
div#img {
width:20%;
height:100px;
margin:auto;
float:left;
} 
 

</style>
</head>

<body>
<h1>GCETTB Control Panel:: Change Password</h1>
<h1>


<?php
session_start();
require 'conn2.php';
	require 'browser.php';
	require 'auth.php';


$newpass=$_POST['newpass'];
$newpass2=$_POST['newpass2'];
if($_POST['newpass']==$_POST['newpass2']){

 $myusername =$username; 
$mypassword = $_POST['password'];
$sql = "SELECT username FROM admin where username='$myusername' and password=sha1('$mypassword')";  
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count == 1){
$sql2="UPDATE admin SET password=sha1('$newpass') WHERE username='$myusername'"; 
$result = mysqli_query($conn, $sql2);
	$_SESSION['admin'] = "$myusername";
	$_SESSION['password'] = "$newpass";
echo "Password Changed" ;
}  
else {
echo "Wrong  Password" ;
} 
} else {echo " New Passwords Do Not Match";}  
?>
	</h1>
	<a href="adminhome.php">GO TO HOME</a>











</body>
</html>