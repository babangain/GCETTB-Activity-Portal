<?php
$dept=$_GET['dept'];
$slno=$_GET['slno'];
require "conn.php";

$sql = "SELECT * FROM $dept where slno=$slno";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
		$title=$row["title"];
		$startdate=$row["startdate"];
		$enddate=$row["enddate"];
		$coordinator=$row["coordinator"];
		$venue=$row["venue"];
		$participants=$row["participants"];
		$description=$row["description"];
		$pic1=$row["pic1"];
		$pic2=$row["pic2"];
		$pic3=$row["pic3"];
		$pic4=$row["pic4"];
		$pic5=$row["pic5"];
		$count=0;
		if($pic1!="")
			$count++;
		if($pic2!="")
			$count++;
		if($pic3!="")
			$count++;
		if($pic4!="")
			$count++;
		if($pic5!="")
			$count++;
		if($count>0)
		$res=95/$count;
		else $res=0;
	}
} else {
    echo "An Error Occured. Please Try later";
	exit();
}
?>




<html>
	<head>
		<title><?php echo"$title"; ?></title>
		<style>
			body{text-align: center;
			}
			#collegename {
				text-align: center;
				color: red;
				background: blue;
				font-size: 50;
				
			}
			#collegename2 {
				font-size: 30;
			}
			p { margin: 0; }
			#programtitle {
				background-color: chartreuse; 
				font-size: 25;
			}
			#programtitle2 {
				font-size: 35;
				padding: 1px;
				border-style: dashed;
				border-width: 0.5;
				text-decoration-color: blue;
				color:blue;
			}
			#eventdate {
				background-color: #09F70E;
				font-size: 25;
			}
			#eventdate2 {
			font-size: 35;
				padding: 1px;
				border-style: dashed;
				border-width: 0.5;
				color : blue;
			}
			#coorvenpart{
				width:100%;
				background-color: yellow;
			}
			#coordinator , #venue, #participants{
				float: left;
				background-color: yellow;
				width: 33%;
				border-style:outset;
				border-width: 2;
			}
			#pic{
				width: 100%;
			}
			.pic img{
				width: <?php echo "$res"; ?>%;
				height: 300px;
				 padding:1px;
       border:1px solid #021a40;
       background-color:#ff0;
			}
			.pic{
				float: left;
			}
		</style>
	</head>
	<body>
	<div id="collegename">
		<p>Govt. College of Engineering & Textile Technology</p>
		<p id="collegename2">Berhampore - West Bengal - India</p>
    </div>
		<div id="programtitle">
			<p>Program Title :</p>
			<p id="programtitle2"><?php
			echo "$title";
				?> <p>
			
		</div>
		<div id="eventdate">
		<p>Event Date:<p>
			<p id="eventdate2"><?php echo "$startdate TO $enddate"; ?></p>
		</div>
		<div id="coorvenpart">
 <div id="coordinator">
 	<h1>Coordinators :</h1>
 	<?php echo "$coordinator" ?>
 	
 </div>
 <div id="venue">
 	<h1>Venue :</h1>
 	<?php echo "$venue";
	 ?>
 </div>
 <div id="participants">
 	<h1>Participants :</h1>
		<?php echo "$participants"; ?>
 </div>
</div>
<div><h1>Description :</h1>
<?php echo "$description"; ?>
</div>
<div class="pic">
	<img src='<?php echo "$dept"."/"."$slno"."/"."$pic1"; ?>'onerror="this.style.display='none'"/>
	<img src='<?php echo "$dept"."/"."$slno"."/"."$pic2"; ?>'onerror="this.style.display='none'"/>

	<img src='<?php echo "$dept"."/"."$slno"."/"."$pic3"; ?>'onerror="this.style.display='none'"/>
	<img src='<?php echo "$dept"."/"."$slno"."/"."$pic4"; ?>' onerror="this.style.display='none'"/>

	<img src='<?php echo "$dept"."/"."$slno"."/"."$pic5"; ?>'onerror="this.style.display='none'"/>
	</body>
</html>