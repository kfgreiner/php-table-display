 <?php

//Define host 
$hostname = "localhost";

//Define database username 
$username = "DBUN";

//Define database password
$password = "DBPW";

//Define database name
$dbname = "DBNAME";

 $cn = mysql_connect($hostname, $username, $password);
 mysql_select_db($dbname);
 if (!$cn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $cn);


?>
