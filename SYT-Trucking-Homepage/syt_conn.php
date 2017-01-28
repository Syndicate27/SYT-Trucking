<?php

	$conn = mysqli_connect('localhost:8080', 'jnji', 'hd37evqy', 'shipment_info'); /*we will enter in 4 parameters*/

	/*if connection fails */

	if(!$conn) {

		die("Connection Failed: " . mysqli_connect_error()); /* kills the connection */

	}

	?>