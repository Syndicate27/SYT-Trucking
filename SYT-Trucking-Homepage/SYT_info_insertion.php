<?php

	$link = mysqli_connect('localhost', 'jnji', 'hd37evqy', 'syt trucking'); /*we will enter in 4 parameters*/
	/*if connection fails */

	if(!$link) {

		die("Connection Failed: " . mysqli_connect_error()); /* kills the connection */

	}

		// $company = mysqli_escape_string($link, $_REQUEST['company']);

			

		$sql = "CREATE TABLE Entry_Info (
				c_Name(15) VARCHAR NOT NULL PRIMARY KEY,
				truck_Num INT NOT NULL,
				month VARCHAR(10) NOT NULL,
				day INT(2) NOT NULL,
				year INT(4) NOT NULL,
				p_location VARCHAR(20) NOT NULL,
				d_location VARCHAR(20) NOT NULL,
				ticket_Num INT(15) NOT NULL,
				weight FLOAT(5) NOT NULL)";

			if(mysqli_query($link, $sql)) {
				echo "<p><b>Your records have been inserted to our database successfully!</b></p>";

			}else{
				echo "<p><b>Your records have not been recorded. Unsuccessful connection!</b></p>";
			}


	mysqli_close($link);




?>