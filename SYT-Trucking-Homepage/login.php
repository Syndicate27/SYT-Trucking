<?php

include 'dbh.php';




$sql = "INSERT INTO user(fname, lname, uid, pwd) VALUES('$fname', '$lname', '$uid', '$pwd')";

$reulst = mysqli_query($conn, $sql);

header("Location: SYT_Home.html"); /* This will take us back to home page */

?>


<form action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Username" autofocus><br>
	<input type="password" name="pwd" placeholder="Password" autofocus><br>
	<button type="submit">LOGIN</button>


</form>