<html>
	<head>
		<style>
			body{
				text-align: center;
				background-color: aqua;
			}
		</style>
		<body>
			<h1><a href="adminhome.php">Control Panel Home</a></h1>
		</body>
	</head>
</html>
<?php
require "conn2.php";
require 'browser.php';
require 'auth.php';
$id=1;
$slno=0;
//Checking Inputs
      $active=$_POST['active'];
      $progno=mysqli_real_escape_string($conn,$_POST['progno']);
      $dept=mysqli_real_escape_string($conn,$_POST['cat']);
      $title=mysqli_real_escape_string($conn,$_POST['title']);
      $company=mysqli_real_escape_string($conn,$_POST['company']);
      $experts=mysqli_real_escape_string($conn,$_POST['experts']);
      $orgdept=mysqli_real_escape_string($conn,$_POST['orgdept']);
      $datestart=mysqli_real_escape_string($conn,$_POST['datestart']);
   $dateend=mysqli_real_escape_string($conn,$_POST['dateend']);
      $coordinators=mysqli_real_escape_string($conn,$_POST['coordinators']);
      $venue=mysqli_real_escape_string($conn,$_POST['venue']);
      $participants=mysqli_real_escape_string($conn,$_POST['participants']);
      $description=mysqli_real_escape_string($conn,$_POST['description']);
      date_default_timezone_set('Asia/Calcutta');
      $year = date('Y');
      $curdate=date('m/d/Y h:i:s a', time());
      $sql="UPDATE $dept SET title='$title',datestart='$datestart',dateend='$dateend', company='$company',experts='$experts',orgdept='$orgdept',coordinator='$coordinators',venue='$venue',participants='$participants',description='$description',active='$active' where progno='$progno'";
    if (mysqli_query($conn, $sql))
	{
        echo "Text Fields has been updated.<br/>";
	}
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}

$target_dir = "../$dept/$progno/";
$target_file = $target_dir . basename($_FILES["pic1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic1"]["name"]). " has been uploaded<br/>";
        $link1=basename( $_FILES["pic1"]["name"]);
        
    } else {
        ;
    }
}
$target_file = $target_dir . basename($_FILES["pic2"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    ;
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic2"]["name"]). " has been uploaded<br/>";
        $link2=basename( $_FILES["pic2"]["name"]);
        
    } else {
       ;
    }
}



$target_file = $target_dir . basename($_FILES["pic3"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    ;
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic3"]["name"]). " has been uploaded<br/>";
        $link3=basename( $_FILES["pic3"]["name"]);
        
    } else {
       ;
    }
}
$target_file = $target_dir . basename($_FILES["pic4"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    ;
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic4"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic4"]["name"]). " has been uploaded<br/>";
        $link4=basename( $_FILES["pic4"]["name"]);
        
    } else {
       ;
    }
}
$target_file = $target_dir . basename($_FILES["pic5"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    ;
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic5"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic5"]["name"]). " has been uploaded<br/>";
        $link5=basename( $_FILES["pic5"]["name"]);
        
    } else {
       ;
    }
}

$target_file = $target_dir . basename($_FILES["attachment"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
    ;
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["attachment"]["name"]). " has been uploaded<br/>";
        $attachment=basename( $_FILES["attachment"]["name"]);
        
    } else {
       ;
    }
}

if($link1!=""){
$sql = "UPDATE $dept SET pic1='$link1' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Pic-1 Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if($link2!=""){
$sql = "UPDATE $dept SET pic2='$link2' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Pic-2 Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if($link3!=""){
$sql = "UPDATE $dept SET pic3='$link3' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Pic-3 Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if($link4!=""){
$sql = "UPDATE $dept SET pic4='$link4' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Pic-4 Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if($link5!=""){
$sql = "UPDATE $dept SET pic5='$link5' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Pic-5 Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
if($attachment!=""){
$sql = "UPDATE $dept SET attachment='$attachment' WHERE progno='$progno';";
	if (mysqli_query($conn, $sql)) {
    echo "<br/>Attachment Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}

if (mysqli_query($conn, $sql)) {
    echo "<br/>Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
echo "<br/>All records updated for Program No. $progno"
?>