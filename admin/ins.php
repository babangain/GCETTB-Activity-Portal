

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PROGRAM</title>
    <link rel="stylesheet" href="assetsinsert/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsinsert/css/styles.css">
    <link rel="stylesheet" href="assetsinsert/css/untitled.css">
    <style>
	
	
	</style>
</head>

<body>
   <?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>	
    <div id="whol-frm">
        <div id="head"><img src="assetsinsert/img/gallery_10071_88_7479.jpg" id="clg-lg">
            <h1 id="clg-nm">GOVT. COLLEGE OF ENGINEERING AND TEXTILE TECHNOLOGY, BERHAMPORE</h1></div>
        <div id="FORM-ALL">
           
            <div id="frm-h">
                <h2 id="heading">: Program information insertion Form :</h2></div>
            <hr>
            <div id="div-1">
                <form method="post" action="insertproc.php" enctype="multipart/form-data">
                <p>Category :-</p>
                <select name="cat">
                   
                    <?php
						$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$name=$row["name"];
		echo "<option value='".$name."'>".strtoupper($name)."</option>";
	}
}
						?>
                      
                        
                
                </select>
                <br>
            
                <p>1. Programme Name : ( 200 chars) <span style="color: red; background: white;">*</span> </p>
                <input type="text"  id="p-name" name="title"  onKeyDown="limitText(this.form.title,this.form.countdown,200);" 
onKeyUp="limitText(this.form.title,this.form.countdown,200);" required>
                
                <br>
                <p>2. i) Programme Start Date :  <span style="color: red; background: white;">*</span> </p>
               
                
                
                
                
                
                <input  type="date"  id="p-date" name="datestart"  required>
               <p>2. ii) Programme End Date : <span style="color: red; background: white;">*</span> </p>
                <input type="date"  id="p-date" name="dateend"  required>
                <br>
                <p>3. Programme Associate Company : (70 chars)</p>
                <input type="text"  id="p-associate-comp" name="company" onKeyDown="limitText(this.form.company,this.form.countdown,70);" 
onKeyUp="limitText(this.form.company,this.form.countdown,70);" >
                <br/><br><br>
                <p>4. Programme Experts : (200 chars)</p>
                <input type="text"  id="p-expert"  name="experts"  onKeyDown="limitText(this.form.experts,this.form.countdown,200);" 
onKeyUp="limitText(this.form.experts,this.form.countdown,200);">
                <p>5. Programme Venue : (100 chars) <span style="color: red; background: white;">*</span> </p>
                <input type="text" id="p-venue" name="venue"  onKeyDown="limitText(this.form.venue,this.form.countdown,100);" 
onKeyUp="limitText(this.form.venue,this.form.countdown,100);" required>
                <p>6. Programme Participants : (100 chars) <span style="color: red; background: white;">*</span> </p>
                <input type="text"  id="p-participants" name="participants"  onKeyDown="limitText(this.form.participants,this.form.countdown,100);" 
onKeyUp="limitText(this.form.participants,this.form.countdown,100);" required>
                <p>7. Programme Org Departments : (100 chars) <span style="color: red; background: white;">*</span> </p>
                <input type="text"  id="p-org-dept" name="orgdept"  onKeyDown="limitText(this.form.orgdept,this.form.countdown,100);" 
onKeyUp="limitText(this.form.orgdept,this.form.countdown,100);" required>
                <p>8. Programme Coordinators: (100 chars) <span style="color: red; background: white;">*</span> </p>
                <input type="text"  id="p-coord" name="coordinators"  onKeyDown="limitText(this.form.coordinators,this.form.countdown,100);" 
onKeyUp="limitText(this.form.coordinators,this.form.countdown,100);" required>
                <p>9. Programme Details: (3000 chars) <span style="color: red; background: white;">*</span> </p>
                <textarea id="pgr-details" name="description" rows="50" cols="100"  onKeyDown="limitText(this.form.description,this.form.countdown,3000);" 
onKeyUp="limitText(this.form.description,this.form.countdown,3000);" onClick="if(this.value=='Please Enter Programme Details'){
              this.value=''}" required>Please Enter Programme Details</textarea>
               
            </div>
        
        <div id="div-2">
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
       
        
        &nbsp; &nbsp; &nbsp; &nbsp;  <center>  <input  type="submit" id="submit" value="ADD Program" style="color: red; background-color: lightgreen; height: 50px; width: 200px;">
        
			</form>
        </div>
	</div>
	<script>
	/*	//To Count Program Title
		var maxcharname = 200;
var title = document.getElementById("p-name");
var titlecount = document.getElementById("countname");		
titlecount.innerHTML = maxcharname;

title.addEventListener("keydown",countname);

function countname(e){
    var len =  title.value.length;
    if (len >= maxcharname){
       e.preventDefault();
    } else{
       titlecount.innerHTML = maxcharname - len-1;   
    }
}
		
		var maxchardate = 70;
var date = document.getElementById("p-date");
var datecount = document.getElementById("countdate");
		
		
datecount.innerHTML = maxchardate;

date.addEventListener("keydown",countdate);

function countdate(e){
    var len =  datecount.value.length;
    if (len >= maxchardate){
       e.preventDefault();
    } else{
       datecount.innerHTML = maxchardate - len-1;   
    }
}
		
		*/
		
		
		
		</script>
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