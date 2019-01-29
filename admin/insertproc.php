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
      $sql="insert into $dept (id,title,datestart,dateend,company,experts,orgdept,coordinator,venue,participants,description,insertdate,year) VALUES ('$id','$title','$datestart','$dateend','$company','$experts','$orgdept','$coordinators','$venue','$participants','$description','$curdate','$year')";
    if (mysqli_query($conn, $sql))
	{
        echo "Entry Successful.<br/>";
	}
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}


			$sql="Select slno,year from $dept order by slno desc limit 1 ;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$slno=$row["slno"];
	}
}
$slyear=0;
$sql="SELECT * FROM $dept where year=$year";
$result = mysqli_query($conn, $sql);

$slyear=mysqli_num_rows($result);

$progno="gcettb_"."$dept"."_"."$year"."_"."$slno"."_"."$slyear";
$progno=strtoupper($progno);
mkdir("../$dept/$progno");
$target_dir = "../$dept/$progno/";
$target_file = $target_dir . basename($_FILES["pic1"]["name"]);
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


$sql = "UPDATE $dept SET pic1='$link1', pic2='$link2', pic3='$link3', pic4='$link4',pic5='$link5' , attachment='$attachment' , progno='$progno' WHERE slno='$slno';";

if (mysqli_query($conn, $sql)) {
    echo "<br/>Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$sql="update recent SET progno='$progno', name='$title',pic='$link1', cat='$dept' where sl=1";
if (mysqli_query($conn, $sql)) {
    echo "<br/>Program added to Recent Programs";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
echo "<h1>Program Generated With Program No. "."$progno"."</h1>";
?>