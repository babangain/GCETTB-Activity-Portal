<?php
session_start();
require 'conn2.php';
$count=0;

if(isset($_POST['admin'])){
 $myusername = $_POST['admin']; $mypassword = $_POST['password'];
 if($myusername==""){;}
 else {
 
$sql = "SELECT * FROM admin where username='$myusername' and password=sha1('$mypassword')";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['admin'] = $_POST['admin'];
	$_SESSION['password']=$_POST['password'];
header("location:adminhome.php");
exit();
} 



}

require 'browser.php';
date_default_timezone_set('Asia/Calcutta');
 $date = date('Y-m-d H:i:s');
if ($myusername==""){;} 
else {
$sql4="INSERT INTO invalidlogins (username,password,date,ip,browser,version,os) VALUES ('$myusername','$mypassword','$date','$ip','$browser','$version','$os')";
if (mysqli_query($conn, $sql4)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}
}




if ($count ==0){
if ($myusername==""){;} 
else {
echo "<script>alert('Wrong Username / Password');</script>" ;
} 
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
   

    <div></div>
    <h1 id="adm-h">-: Admin Log-in :--</h1>
    <hr id="head-hr">
    <div>
        <div id="h">
            </div><img src="assets/img/gallery_10071_88_7479.jpg">
        <form method="post" action="">
            <div class="form-group">
                <div id="usr-id">
                    <div id="usr-txt">
                        <p>User-id :</p>
                    </div>
                    <div id="input">
                        <input class="form-control input-lg" type="text" name="admin" required>
                    </div>
                </div>
                <br clear="all">
                <div id="sp"></div>
                <div id="paswrd">
                    <div id="pas-txt">
                        <p>Password :</p>
                    </div>
                    <div id="pass-input">
                        <input class="form-control" type="password" name="password" required>
                    </div>
                    <br clear="all">
                </div>
                <div id="button">
                    <button class="btn btn-default" type="submit">Log in</button>
                </div>
            </div>
        </form>
        <div></div>
        <hr>
    </div>
    <script src="assets/login/js/jquery.min.js"></script>
    <script src="assets/login/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>