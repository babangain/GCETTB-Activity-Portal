
<?php
session_start();
require 'conn2.php';
	require 'browser.php';
require 'auth.php';

?>
<html>
	<head>
		<title>
			View Program
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

     input[type=text], input[type=select]  {
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
	<h1>View Program</h1>
	<form action="view.php" method="get">
		SELECT DEPARTMENT : 
		<br/>
		<select name="dept">
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
		<br>
		<input type="submit" value="VIEW">
		
	</form>
	</body>
</html>
	
