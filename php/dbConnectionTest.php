<?php
	// Create connection
	$con=mysqli_connect("localhost","root","","mycommunity");

	// Check connection
	if (mysqli_connect_errno($con)) {
 	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "Success";
	}
	
	echo "<br>";
	
	$result = mysqli_query($con,"SELECT * FROM projects");

	while($row = mysqli_fetch_array($result)) {
  			
  		echo $row['id'] . " " . $row['project'];
  		echo "<br>";
	}

	mysqli_close($con);


?>