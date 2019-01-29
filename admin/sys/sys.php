<?php
require "../conn2.php";
$stat=$_GET['stat'];
$sql="UPDATE sys  SET status=$stat";
if (mysqli_query($conn, $sql))
	{
        echo "Status Set";
	}
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<br/>Some error Occured. Please try later";
}
?>