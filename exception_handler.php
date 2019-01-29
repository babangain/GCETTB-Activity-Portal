<?php
		$sql="Select * from sys;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$stat=$row["status"];
		if($stat==0)
		{
			echo "Internal Server Error.";
			exit();
		}
	}
}
?>