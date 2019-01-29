<?php
require "conn.php";
?>
<head>
	<title>Welcome to GCETTB Academic & Cultural Activities Portal</title>
	<style>
		body{text-align: center;}
		#menu1{
			width: 100%;
		}
		#iif,#fdf,#fs,#rem{
			width: 24.5%;
			height: 300px;
			float: left;
       border:1px solid #021a40;
			background-color: lightcyan;
		}
	</style>
</head>
<body>
	<h1>Welcome to GCETTB Academic & Cultural Activities Portal</h1>
	<br/>
	<div id="menu1" class="outermenu">
	<?php
	$dept="iif";
		?>
		<div id='<?php echo $dept; ?>'' class="innermenu">
			<h2><?php echo strtoupper("$dept"); ?></h2>
		<?php
			$sql="Select title,slno from iif order by slno desc;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$title=$row["title"];
		$slno=$row["slno"];
		echo "<a href='view.php?dept=$dept&slno=$slno'>";
		echo "$title";
		echo "</a><br/>";
	}
}
			?>
		</div>
		<?php
	$dept="fdf";
		?>
		<div id='<?php echo $dept; ?>'' class="innermenu">
			<h2><?php echo strtoupper("$dept"); ?></h2>
		<?php
			$sql="Select title,slno from $dept order by slno desc;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$title=$row["title"];
		$slno=$row["slno"];
		echo "<a href='view.php?dept=$dept&slno=$slno'>";
		echo "$title";
		echo "</a><br/>";
	}
}
			?>
		</div>
		<?php
	$dept="fs";
		?>
		<div id='<?php echo $dept; ?>'' class="innermenu">
			<h2><?php echo strtoupper("$dept"); ?></h2>
		<?php
			$sql="Select title,slno from $dept order by slno desc;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$title=$row["title"];
		$slno=$row["slno"];
		echo "<a href='view.php?dept=$dept&slno=$slno'>";
		echo "$title";
		echo "</a><br/>";
	}
}
			?>
		</div>
		<?php
	$dept="rem";
		?>
		<div id='<?php echo $dept; ?>'' class="innermenu">
			<h2><?php echo strtoupper("$dept"); ?></h2>
		<?php
			$sql="Select title,slno from $dept order by slno desc;";
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$title=$row["title"];
		$slno=$row["slno"];
		echo "<a href='view.php?dept=$dept&slno=$slno'>";
		echo "$title";
		echo "</a><br/>";
	}
}
			?>
		</div>
	</div>
</body>