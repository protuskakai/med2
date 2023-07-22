<?php
$host="cherabooks.org";
$name = "cheraboo_55509";
$pass = "kit@le@1971";
$dbname = "cheraboo_shopping";
$dbi = mysqli_connect($host, $name,$pass,$dbname) or
die("I cannot connect to the database. Error :" . mysqli_error());
mysqli_select_db($dbi,$dbname); 
?>