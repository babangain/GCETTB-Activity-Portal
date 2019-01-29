<?php
require 'conn2.php';
	require 'browser.php';
require 'auth.php';
$progno=$_GET['progno'];
$sql2 = "SELECT * FROM category";
	$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
  while($row2 = mysqli_fetch_assoc($result2)) {
	  $dept2=$row2["name"];
	  $sql="select * from $dept2 where progno='$progno'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
		  $dept=$dept2;
        $id=$row["id"];
		$title=$row["title"];
		$datestart=$row["datestart"];
		  $dateend=$row["dateend"];
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
		  break;
	}
} 
	else {
   ;
}
}
}
if($found==0){
	echo "Program NOT FOUND!!!";
	exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>programme Edit</title>
    <link rel="stylesheet" href="assetsinsert/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsinsert/css/styles.css">
    <link rel="stylesheet" href="assetsinsert/css/untitled.css">
    <style>
		.pic{
			height: 150px;
			width: 150px;
		}
	</style>
</head>

<body>
    <div id="whol-frm">
        <div id="head"><img src="assetsinsert/img/gallery_10071_88_7479.jpg" id="clg-lg">
            <h1 id="clg-nm">GOVT. COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY, BERHAMPORE</h1></div>
        <div id="FORM-ALL">
            <div id="frm-h">
                <h2 id="heading">: Program Edit  Form :</h2></div>
            <hr>
            <div id="div-1">
                <form method="post" action="editproc.php" enctype="multipart/form-data">
               
                <br>
                <p>Category :-</p>
                <select name="cat">
                <optgroup label="Category">
                
                	<option value='<?php echo "$dept"; ?>'>
                		<?php echo "$dept"; ?>
                	</option>
              
             
					</optgroup>
					</select>
                <br/>
                <p>Program No. </p>
                <input type="text" name="progno" value='<?php echo"$progno"; ?>' required readonly>
                <p>1. Programme Name : (200 chars) <span style="color: red; background: white;">*</span></p>
                <input type="text"  id="p-name" name="title" value='<?php echo "$title"; ?>'  onKeyDown="limitText(this.form.title,this.form.countdown,200);" 
onKeyUp="limitText(this.form.title,this.form.countdown,200);" required >
                <br>
                 <p>2. i) Programme Start Date : ( 70  chars) <span style="color: red; background: white;">*</span> </p>
                <input type="date"  value='<?php echo "$datestart"; ?>' id="p-date" name="datestart"  required>
               <p>2. ii) Programme End Date : ( 70  chars) <span style="color: red; background: white;">*</span> </p>
                <input type="date" value='<?php echo "$dateend"; ?>' id="p-date" name="dateend"  required>
                <br>
                <p>3. Programme Associate Company : (70 chars)</p>
                <input type="text"  id="p-associate-comp" name="company" value='<?php echo "$company"; ?>'  onKeyDown="limitText(this.form.company,this.form.countdown,70);" 
onKeyUp="limitText(this.form.company,this.form.countdown,70);" >
                <br/><br><br>
                <p>4. Programme Experts : (200 chars)</p>
                <input type="text"  id="p-expert"  name="experts" value='<?php echo "$experts"; ?>' onKeyDown="limitText(this.form.experts,this.form.countdown,200);" 
onKeyUp="limitText(this.form.experts,this.form.countdown,200);" >
                <p>5. Programme Venue : (100 chars)<span style="color: red; background: white;">*</span></p>
                <input type="text" id="p-venue" name="venue" value='<?php echo "$venue"; ?>' onKeyDown="limitText(this.form.venue,this.form.countdown,100);" 
onKeyUp="limitText(this.form.venue,this.form.countdown,100);" required>
                <p>6. Programme Participants : (100 chars)<span style="color: red; background: white;">*</span></p>
                <input type="text"  id="p-participants" name="participants" value='<?php echo "$participants"; ?>'  onKeyDown="limitText(this.form.participants,this.form.countdown,100);" 
onKeyUp="limitText(this.form.participants,this.form.countdown,100);" required>
                <p>7. Programme Org Departments : (100 chars)<span style="color: red; background: white;">*</span></p>
                <input type="text"  id="p-org-dept" name="orgdept" value='<?php echo "$orgdept"; ?>'  onKeyDown="limitText(this.form.orgdept,this.form.countdown,100);" 
onKeyUp="limitText(this.form.orgdept,this.form.countdown,100);" required>
                <p>8. Programme Coordinators: (100 chars)<span style="color: red; background: white;">*</span></p>
                <input type="text"  id="p-coord" name="coordinators"value='<?php echo "$coordinator"; ?>' onKeyDown="limitText(this.form.coordinators,this.form.countdown,100);" 
onKeyUp="limitText(this.form.coordinators,this.form.countdown,100);" required>
                <p>9. Programme Details: (3000 chars)<span style="color: red; background: white;">*</span></p>
                <textarea id="pgr-details" name="description" rows="30" cols="70"   onKeyDown="limitText(this.form.description,this.form.countdown,3000);" 
onKeyUp="limitText(this.form.description,this.form.countdown,3000);" required><?php echo "$description"; ?>
                </textarea>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div id="div-2">
           <h1>
           	Keep Blank For No Change
           </h1>
            <p>10. Programme pic -1</p>
            <input type="file" accept="image/*" value="pic-1" id="pic-1" name="pic1">
            <br>
            <p>11. Programme pic -2</p>
            <input type="file" accept="image/*" value="pic-2" id="pic-2" name="pic2">
            <br>
            <p>12. Programme pic -3</p>
            <input type="file" accept="image/*" value="pic-3" id="pic-3" name="pic3">
            <br>
            <p>13. Programme pic -4</p>
            <input type="file" accept="image/*" value="pic-4" id="pic-4" name="pic4">
            <br>
            <p>14. Programme pic -5</p>
            <input type="file" accept="image/*" value="pic-5" id="pic-5" name="pic5">
            <br>
            <p>15. Programme Brochure :</p>
            <input type="file" accept=".pdf" value="P_brochure" id="p-brochure" name="attachment">
            <br>
            <p>Active : ?</p>
            <select name="active">
            	<option value="Y">YES</option>
            	<option value="N">NO</option>
            </select>
        &nbsp; &nbsp; &nbsp; &nbsp;  <center>  <input  type="submit" id="submit" value="EDIT Program" style="color: red; background-color: lightgreen; height: 50px; width: 200px;">
        
			</form>
        </div>
    </div>
   <script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
		alert("Max Character Reached");
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>
</body>

</html>