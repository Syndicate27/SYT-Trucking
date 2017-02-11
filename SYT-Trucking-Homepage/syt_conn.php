<?php

	$conn = mysqli_connect('localhost', 'jnji', 'hd37evqy', 'syt trucking'); /*we will enter in 4 parameters*/

	/*if connection fails */

	if(!$conn) {

		die("Connection Failed: " . mysqli_connect_error()); /* kills the connection */

	}

	?>