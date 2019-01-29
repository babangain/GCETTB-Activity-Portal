<?php
session_start();
$username="";
$password="";
if(isset($_SESSION['admin'])){
$username=$_SESSION['admin'];
}
if(isset($_SESSION['password'])){
$password=$_SESSION['password'];
}
	//Checking If Credentials are Valid
$sql = "SELECT firstname,lastname FROM admin where username='$username' and password=sha1('$password')";
$result = mysqli_query($conn, $sql);
// If username password matches
if (mysqli_num_rows($result) == 1) {
    // output data of each row
	$sql4="INSERT INTO adminact (username,password,date,page,ip,browser,version,os) VALUES ('$username','$password','$date','$page','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql4)) {
   ;
} else {
echo "<br/>Some error Occured. Please try later";
}
    while($row = mysqli_fetch_assoc($result)) {
        $firstname= $row["firstname"];
        $lastname=$row["lastname"] ;
    
} 
}
	// If Wrong Username / Password. Show Error
	else{
		$sql4="INSERT INTO adminerror (username,date,page,ip,browser,version,os) VALUES ('$username','$date','$page','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql4)) {
   ;
} else {
echo "<br/>Some error Occured. Please try later";
}
		echo "You Are NOT Logged In.<br/> <a href='login.php'>Login Here</a>";
		exit();
	}
?>