<?php
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
<html>
	<head>
		<title>GCETTB Control Panel :: Add Program</title>
		<style>
			#left, #right{
				width: 48%;
				float: left;
				border: 1px solid black;
			}
			body{
				text-align: center;
				background-color: aqua;
			}
			 input[type=text], input[type=password], input[type=date], select {
    width: 40%;
    height: 5%;
    margin: 8px 0;
    box-sizing: border-box;
border: 2px solid blue;
align:center;
    border-radius: 4px;
				 align-content: center;
				 text-align: center;
			}
			textarea{
				border: 2px solid blue;
			}
			input[type=button], input[type=submit], input[type=reset] {
    background-color:darkblue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
		</style>
	</head>
<body>
		<h1>GCETTB Control Panel :: Add Program</h1>
		<a href="adminhome.php">GO TO HOME</a><br/>
		<div id="left">
		<form id="insert" name="insert" action="insertproc.php" method="post" enctype="multipart/form-data">
	  Select Department : <br>
	  <select name="dept" id="dept">
	  	<option value="iif">IIF</option>
	  	<option value="fs">FS</option>
	  	<option value="fdf">FDF</option>
	  	<option value="rem">REM</option>
	  </select><br>
	  TEQIP / NON-TEQIP : <br/>
	  <select name="teqip" id="teqip">
	  	<option value="yes">TEQIP</option>
	  	<option value="no">NON- TEQIP</option>
	  </select><br/>
		  <p>Title : <br>
		<input maxlength="10" name="title"  id="title" type="text">
		
			
		  </p>
		  
		   <p>Start Date :</p>
		  <p>
		    <input type="date" name="startdate" id="startdate">
		  </p>
		   <p>End Date :</p>
		  <p>
		    <input type="date" name="enddate" id="enddate">
		    
			</p></div>
			<div id="right">
		  <p>Coordinators :</p>
		  <textarea id="coordinators" name="coordinators" rows="6" cols="40">Write Coordinators Here</textarea>
		  <p>Venue :</p>
		  <textarea id="venue" name="venue" rows="6" cols="40">Write Venue Here</textarea>
		  <p>Participants :</p>
		  <textarea id="participants" name="participants" rows="7" cols="40">Write Participants Here</textarea>
			</div>
		  <p>Description :</p>
		  <textarea id="description" name="description" rows="20" cols="80">Write Description Here</textarea>
		  <br/>Attachment :
		  <input type="file" name="attachment" id="attachment"><br/>
		  <br/>Pic 1 :
		  <input type="file" name="pic1" id="pic1"><br/>
		  <br/>Pic 2:
		  <input type="file" name="pic2" id="pic2"><br/>
		  <br/>Pic 3 :
		  <input type="file" name="pic3" id="pic3"><br/>
		  <br/>Pic 4:
		  <input type="file" name="pic4" id="pic4"><br/>
		  <br/>Pic 5 :
		  <input type="file" name="pic5" id="pic5"><br/><br/>
		  <input type="submit" name="SUBMIT">
		  
    </form>
</body>
</html>