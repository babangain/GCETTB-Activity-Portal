<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-gcettbian-feedback</title>
    
    <link rel="stylesheet" href="assets/css/styles.css">
<style>





    </style>
    </head>

<body>
    <div id="clgbn"><img src="assets/img/finalfinal bnr.jpg" id="clgbnr"></div>
    <h1>: Feedback of GCETTBIANS :</h1>
    <div class="table-responsive">
        <table class="table">

<?php
require 'conn2.php';
			require 'browser.php';
			require 'auth.php';
			$sql7="SELECT * FROM gcettbianfeedback order by slno desc";
?><br/>

<center>
<table class="teacher" width="100%">
 <tr>
     <th>Sl no</th>
                    <th>Name </th>
                    <th>YoP </th>
                    <th>Dept </th>
                    <th>Mobile No.</th>
                    <th>Email </th>
                    <th>Organization </th>
                    <th>Designation </th>
                    <th>Address </th>
                    <th>Comment </th>
                    <th>Date </th>
    
  </tr>

<?php

$res = mysqli_query($conn, $sql7);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
echo "<tr><td>$row[slno]</td>" ;
 echo "<td>$row[name]</td>" ;

echo "<td>$row[yop]</td>" ;

echo "<td>$row[dept]</td>" ;

echo "<td>$row[mob]</td>" ;


echo "<td>$row[email]</td>" ;
		echo "<td>$row[org]</td>" ;

echo "<td>$row[desig]</td>" ;


echo "<td>$row[address]</td>" ;
echo "<td>$row[comment]</td>" ;
		echo "<td>$row[date]</td>" ;
echo "</tr>";







} 
}

?>



























</body>
</html>




