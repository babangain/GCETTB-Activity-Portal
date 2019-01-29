<html>
<head><title>GCETTB Admin Panel :: Home </title>
<style>
	body{
		align-content: center;
		text-align: center;
	}
	#add,#edit,#view,#pass{
		width: 50%;
		float: left;
	}
	#add img , #edit img,#view img,#pass img{
		width: 90%;
		height: 99%;
	}
	#row1, #row2{
		width: 100%;
		height: 30%;
	}
	#logout {
		height: 25%;
		width: 100%;
	}
	#logout img{
		height: 95%;
		width: 50%;
	}


</style>
</head>

<body style="background-color:lightgreen">


<?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
<center>
<form action="addcatproc.php" method="post">
Category Short Name  :<br>
<input type="text" name="name" maxlength="5" required><br>
Category Full Name  : (Max. 20 Chars)<br>
<input type="text" name="fullname" maxlength="20" required><br>
Short Description  : (Max. 30 Chars) <br>
<input type="text" name="description" maxlength="30" required><br>
<input type="submit" value="ADD CATEGOTRY">
	</form>
	</body>
	</html>
	
</form>
	</center>