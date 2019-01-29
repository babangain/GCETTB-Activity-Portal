
<?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
<html>
	<head>
		<title>
			Edit Program
		</title>
		<style>
			body{
				background-color: lightgreen;
				align-content: center;
				text-align: center;
			}
			input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

     input[type=text], input[type=password]  {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
border: 2px solid red;
align:center;
    border-radius: 4px;
}
      
		</style>
	</head>
<body>
<a href="adminhome.php">Control Panel Home</a>
	<h1>Edit Program</h1>
	<form action="edit.php" method="get">
		Program No : 
		<br/>
		<input type="text" name="progno">
		<br>
		<input type="submit" value="EDIT">
		
	</form>
	</body>
</html>
	
