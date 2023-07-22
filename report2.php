<?php


  include "net.php";
   
 $engnam=$_POST["engnam"];
  $botnam= $_POST["botnam"];
  $syn= $_POST["syn"];
  $acts= $_POST["acts"];
  $ind= $_POST["ind"];
  $dos= $_POST["dos"];
  $contra= $_POST["contra"];
$sql = "INSERT INTO herbs (engnam,botnam,syn,acts,ind,dos,contra) VALUES ('$engnam','$botnam','$syn','$acts','$ind','$dos','$contra')";

//echo $sql;
//$result = mysql_query($sql,$dbi) or die ( "no connection". mysql_error() );
$result= mysqli_query($dbi,$sql)  or die ( "no connection". mysql_error() );;

     echo "Done!!!!!";
     echo "<br>";
      echo "<br> <a href='javascript:history.back(1)'>Click here to go back</a>" ; 
     // echo "<br> <a href='report1.php'>Click here to go back</a>" ; 
  
?>
