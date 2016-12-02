<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP SYT Contact Form</title>
</head>

<body>
	<?php
		class Info {
          // Adding the proporties (variables)
          public $company = $_POST["company"]; //Comapny Name
          public $month = $_POST["month"]; //Month Name
          public $day = $_POST["day"]; //day
          public $year = $_POST["year"]; //Year
          public $p_location = $_POST["PickUpLocation"]; //Pick up location of cargo
          public $d_location = $_POST["DropOffLocation"]; //Drop off location of cargo
          public $tnum = $_POST["ticketNumber"]; //Ticket Number
          public $weight = $_POST["tonage"]; //Weight of total cargo delivered

          public function __construct($company, $month, $day, $year, $PickUpLocation, $DropOffLocation, $tnum, $weight) {
              $this->company = $company;
              }
      

          public function rInfo () {
            return "You sent to" . this->company . ".";
            }
          }
          echo rInfo ();
	?>


</body>
</html>
