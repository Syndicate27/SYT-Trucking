<!DOCTYPE html  "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP SYT Contact Form</title>
</head>

<body>
	<?php
           $trucknum = $_POST["truckNumber"]; //Truck Number
           $company = $_POST["company"]; //Comapny Name
           $month = $_POST["month"]; //Month Name
           $day = $_POST["day"]; //day
           $year = $_POST["year"]; //Year
           $p_location = $_POST["PickUpLocation"]; //Pick up location of cargo
           $d_location = $_POST["DropOffLocation"]; //Drop off location of cargo
           $tnum = $_POST["ticketNumber"]; //Ticket Number
           $weight = $_POST["tonage"]; //Weight of total cargo delivered

        echo ("Truck Number: $trucknum <br />  Company Name: $company <br /> Date: $month $day, $year <br />Pick Up Location: $p_location <br /> Drop Off Location: $d_location <br /> Ticket Number: $tnum <br />Tonage:$weight <br />" );
  
	?>


</body>
</html>

