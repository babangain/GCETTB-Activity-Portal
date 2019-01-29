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

<body style="background-color:yellow">


<?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
	<h1>GCETTB Cultural Activities Admin Panel</h1>
<h1> Hi, <?php echo "$firstname"." "."$lastname"; ?></h1>
<div id="row1">
<div id="add">
	<a href="ins.php"><img src="images/add.png"></a>
	</div>
	<div id="edit">
		<a href="edit0.php"><img src="images/edit.png"></a>
	</div>
	</div>
	<div id="row2">
	<div id="view">
		<a href="view0.php"><img src="images/view.png"></a>
	</div>
	<div id="pass">
		<a href="changepassword.php"><img src="images/password.jpg"></a>
	</div>
	</div>
	<h1><a href="addcat.php">Add Category</a></h1>
	<h1><a  href="gcettb feedback/">Feedback (GCETTBians)</a></h1>
	<h1><a  href="other feedback/">Feedback (Others)</a></h1>
	<div id="logout">
		<a href="logout.php"><img src="images/signout.jpg"></a>
		</div>
</body>
</html>