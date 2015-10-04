<?php

	$string = file_get_contents("readData.json");
	$json_a = json_decode($string, true);
	
	foreach ($json_a as $person_name => $person_a) {
		echo $person_a['status'];
	}
?>