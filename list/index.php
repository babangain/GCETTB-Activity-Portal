<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information list page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../footer/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../footer/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../footer/assets/css/styles.css">
    <link rel="stylesheet" href="../footer/assets/css/my-college-footer.css">
    <style>
		.item img{
			height: 300px;
		}
	</style>
</head>

<body>
   <?php
	require '/../conn.php';
	$dept=$_GET['dept'];
	$dept=mysqli_real_escape_string($conn,$dept);
			$sql="Select * from category where name='$dept';";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$fullname=$row["fullname"];
		$piclink=$row["piclink"];
		$about=$row["about"];
	}
}
	else {
		echo "Page Not Found!!!!!";
		exit();
	}
			?>
			<img src="../banner.jpg" style="height: auto" width="100%">
    <div id="hd">
        
        
        
        <h1 id="cat-nm">Category name : <?php echo "$fullname"; ?></h1></div>
        
    <div id="ccc">
        <div class="col-md-12">
            <h1 id="clm-h">About this Category</h1>
            <p id="abt-p"><?php echo "$about"; ?></p>
        </div>
    </div>
    <hr>
    <div id="src">
        <p id="srchtxt">To Search Enter The Program Serial No:</p>
        <form method="get" action="/../view/">
        <input type="search" name="progno">
        <button class="btn btn-default" type="submit">Search </button>
		</form>
    </div>
    <div id="list">
        <p id="list-h">: All Programs Are Listed In  Below :</p>
        <ol>
          <?php
           $sql="Select title,datestart,slno,progno from $dept where active='Y' order by slno desc;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$title=$row["title"];
		$slno=$row["slno"];
		$progno=$row["progno"];
		$datestart=$row["datestart"];
		echo "<a href='/../view/?dept=$dept&slno=$slno'>";
		echo "$title";
		echo "&nbsp; &nbsp;";
		echo "Dt. "."$datestart";
		echo " ( Prog No :";
		echo " "."$progno"." )";
		echo "</a><br/>";
	}
}
			?>
       <?php
       $sql="Select * from $dept order by slno desc limit 1 ;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$progno=$row["progno"];
		$link="/../$dept/$progno/";
		$pic1="$link".$row["pic1"];
		$pic2="$link".$row["pic2"];
		$pic3="$link".$row["pic3"];
		$name=$row["title"];
	}
}
			?>
        </ol>
    </div>
    <div>
        <p id="rcnt-pgr-nm">Recent program images || Program name :  <?php echo "$name"; ?></p>
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="<?php echo $pic1; ?>"  style="height: 300px;" alt="Slide Image"></div>
                <div class="item"><img src="<?php echo $pic2; ?>"  style="height: 300px;" alt="Slide Image"></div>
                <div class="item"><img src="<?php echo $pic3; ?>" style="height: 300px;" alt="Slide Image"></div>
            </div>
            <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
	include '../footer/footer.php';
	?>
