<!DOCTYPE html>
<?php
require "/../conn.php";
$found=0;
if(isset($_GET['progno'])){
$progno=mysqli_real_escape_string($conn,$_GET['progno']);
	$flag=1;
}
if(isset($_GET['dept'])){
$dept=mysqli_real_escape_string($conn,$_GET['dept']);

}
if(isset($_GET['slno'])){
$slno=mysqli_real_escape_string($conn,$_GET['slno']);
	$flag=0;
}



if($flag==0){
$sql = "SELECT * FROM $dept where slno=$slno and active='Y'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
		$title=$row["title"];
		$date=$row["date"];
		$coordinator=$row["coordinator"];
		$company=$row["company"];
		$experts=$row["experts"];
		$venue=$row["venue"];
		$orgdept=$row["orgdept"];
		$progno=$row["progno"];
		$participants=$row["participants"];
		$description=$row["description"];
		$pic1=$row["pic1"];
		$pic2=$row["pic2"];
		$pic3=$row["pic3"];
		$pic4=$row["pic4"];
		$pic5=$row["pic5"];
		$attachment=$row["attachment"];
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
		$res=97/$count;
		else $res=0;
		$found=1;
	}
} 
	else {
    echo "An Error Occured. Please Try later";
	exit();
}
}








if($flag==1){
$sql2 = "SELECT * FROM category";
	$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
  while($row2 = mysqli_fetch_assoc($result2)) {
	  $dept2=$row2["name"];
	  $sql="select * from $dept2 where progno='$progno'  and active='Y'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
		  $dept=$dept2;
        $id=$row["id"];
		$title=$row["title"];
		$date=$row["date"];
		$coordinator=$row["coordinator"];
		$company=$row["company"];
		$experts=$row["experts"];
		$venue=$row["venue"];
		$orgdept=$row["orgdept"];
		$progno=$row["progno"];
		$participants=$row["participants"];
		$description=$row["description"];
		$pic1=$row["pic1"];
		$pic2=$row["pic2"];
		$pic3=$row["pic3"];
		$pic4=$row["pic4"];
		$pic5=$row["pic5"];
		  $progno=$row["progno"];
		  $attachment=$row["attachment"];
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
		$res=97/$count;
		else $res=0;
		  $found=1;
		  break;
	}
} 
	else {
   ;
}
}
}
}
if($found==0){
	echo "Page Not Found!!!";
	exit();
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title"; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
		body{
			text-align: center;
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
    <div id="hd">
       <img src="assets/img/gallery_10071_88_7479.jpg" style="height: 100px; width: 150px; float: left;" >
        <h1 style="height: 100px;"><strong>GOVERNMENT COLLEGE OF ENGINEERING &amp;TEXTILE TECHNOLOGY,BERHAMPORE -MURSHIDABAD-WEST BENGAL-INDIA</strong> </h1>
        

	</div>
   <br><center></center>
    <div id="ccc">
     
               <h1 id="org">: Organised :</h1>
        <h1 id="pgr-nm"><?php echo "$title"; ?></h1>
               
       
        <h1 id="D">DATE OF EVENT</h1>
        <h1 id="DD"><?php echo"$date"; ?> </h1>
        
        
        <h1 id="ASSOC"> IN ASSOCIATION WITH </h1>
        <h1 id="COMPNAM"><?php echo "$company"; ?></h1>
        
        
        <h1 id="inv-exp">Invited Experts</h1>
        <h1 id="exp_names"> <?php echo "$experts"; ?> </h1>
        
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Venue </th>
                        <th>Participants </th>
                        <th>Organizing Departments</th>
                        <th>Coordinators </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="venue"> <?php echo "$venue"; ?> </td>
                        <td id="participants">   <?php echo "$participants"; ?>   </td>
                        <td id="organizing-dept">  <?php echo "$orgdept"; ?>   </td>
                        <td id="coordinators">      <?php echo "$coordinator"; ?>  </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div id="programme-details">
        <h1 id="prg-dtl">PROGRAMME DETAILS</h1>
        <p id="PGR-DETL-PARAGRAPH">
           <?php echo "$description"; ?>
           
           </p>
        
        <div id="sr">
            <p id="pgr-sr">Programme Serial No.</p>
            <p id="Programme-serial-no"><strong><?php echo "$progno"; ?></strong> </p>
        </div>
        <div id="br">
            <p id="pgr-br">Programme Brochure</p>
            <p id="programme-brochure">
            	
            	<?php
				$att="/../"."$dept"."/"."$progno"."/"."$attachment";
			
				if($attachment!=""){
					echo "<a href='$att'>Click Here </a>";
					}
				else {
					echo "Not Available";
				}
				?>
            </p>
        </div>
    </div>
   
    <div>
        <p id="rcnt-pgr-nm">: Programme images :</p>
        <div class="pic">
	<a href='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic1"; ?>'>
	<img src='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic1"; ?>'onerror="this.style.display='none'"/>
			</a>
			<a href='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic2"; ?>'>
	<img src='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic2"; ?>'onerror="this.style.display='none'"/></a>
<a href='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic3"; ?>'>
	<img src='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic3"; ?>'onerror="this.style.display='none'"/></a>
	
	<a href='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic4"; ?>'>
	<img src='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic4"; ?>' onerror="this.style.display='none'"/></a>

<a href='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic5"; ?>'>
	<img src='<?php echo "/../"."$dept"."/"."$progno"."/"."$pic5"; ?>'onerror="this.style.display='none'"/></a>
            </ol>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>