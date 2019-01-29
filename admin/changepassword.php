<html>
<head><title>GCETTB Control Panel :: Change Password</title><style> 
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
	body{
		text-align: center;
		align-content: center;
		background-color: lightgreen;
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

<body style="background-color:greenyellow">


<?php
session_start();
require 'conn2.php';

	require 'browser.php';
	require 'auth.php';
?>
<h1><a href="adminhome.php">Control Panel Home</a></h1>
<h1>GCETTB Control Panel :: Change Password</h1>
<form action="passproc.php" method="POST">
Current Password :<br/>
 <input id="password" type="password" name="password" required ><br/>
</input>
 New Password :<br/>
 <input id="newpass"  type="password"    name="newpass"    ><br/>
</input>
 Re Enter New Password : <br/>
 <input id="newpass2"  required  type="password"   name="newpass2"><br/>
</input>
<input id="submit" type="submit" value="Change Password"></form>
</div>

</body>
</html>