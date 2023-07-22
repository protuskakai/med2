<?php


  include "net.php";
   
 $seq=$_GET["seq"];
//  $botnam= $_POST["botnam"];
//  $syn= $_POST["syn"];
//  $acts= $_POST["acts"];
//  $ind= $_POST["ind"];
//  $dos= $_POST["dos"];
//  $contra= $_POST["contra"];
/*  
 $mdata= findrec($seq);
  $engnam=$mdata[engnam];
   $botnam=$mdata[botnam];
    $syn=$mdata[syn];
     $acts=$mdata[acts];
      $ind=$mdata[ind];
       $dos=$mdata[dos];
        $contra=$mdata[contra];
  */
  
//$sql = "INSERT INTO herbs2 (engnam,botnam,syn,acts,ind,dos,contra) VALUES ('$engnam','$botnam','$syn','$acts','$ind','$dos','$contra')";
 $sql = "update herbs set sel='x' where seq=$seq";
//echo $sql;
//$result = mysql_query($sql,$dbi) or die ( "no connection". mysql_error() );
$result= mysqli_query($dbi,$sql)  or die ( "no connection". mysql_error() );;

     echo "Done!!!!!";
     echo "<br>";
      echo "<br> <a href='javascript:history.back(1)'>Click here to go back</a>" ; 
     // echo "<br> <a href='report1.php'>Click here to go back</a>" ; 
  
?>

<?php

function findrec($mseq)
{

$sql2 = "select * from herbs where $fld   like '%".$val."%' order by engnam";

$result2= mysqli_query($dbi,$sql);

$data2 = mysqli_fetch_array($result2);
return $data2;
}




?>


