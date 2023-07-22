<?php

  include "net.php";
    include "header.htm";
//$fld = $_POST["fld"];
$val = $_GET["seq"];


//$sql0 = "select count(seq) as cnt  from herbs where $fld= $$val."%' order by engnam";

//$result0= mysqli_query($dbi,$sql0);
//echo $val;
// $data0 = mysqli_fetch_array($result0);
// echo $data0['cnt'];
//die("stopped");
$sql = "select *  from herbs where seq=$val order by engnam";
//echo $sql;
//echo $sql;
$result= mysqli_query($dbi,$sql);
// $data = mysqli_fetch_array($result);

//  <div style="position: fixed; top: 0px; width:100%; height: 100px;">
      
   
 // <?php 
    echo "<table width='50%' border='0' align='center'>\n" ;
 //  echo "1";
   
   $c=0;    
        
        while ($data = mysqli_fetch_array($result))
 {
   $c=$c+1;
     $cleanQuery = str_replace(" ","+",$data['engnam']);
        $en = 'http://www.google.com/search?q='.$cleanQuery;
        
         $cleanQuery = str_replace(" ","+",$data['botnam']);
        $bt = 'http://www.google.com/search?q='.$cleanQuery;
      //  $scrape = file_get_contents($url);
 

 //   echo "2";

              echo  "<tr bgcolor='#C1D0EE'><td><b>English Name </b></td></tr>";
          echo  "<tr bgcolor='#CCD0EE'><td><a href='$en'>$data[engnam]</a> </td></tr>";
            echo  "<tr bgcolor='#C1D0EE'><td><b>Botanical Name</b> </td></tr>";
            echo  "<tr bgcolor='#CCD0EE'><td><a href='$bt'>$data[botnam]</a> </td></tr>";
              echo  "<tr bgcolor='#C1D0EE'><td><b>Synonyms </b></td></tr>";
          echo  "<tr bgcolor='#CCD0EE'><td>$data[syn] </td></tr>";
            echo  "<tr bgcolor='#C1D0EE'><td><b>Activities</b> </td></tr>";
            echo  "<tr bgcolor='#CCD0EE'><td>$data[acts] </td></tr>";
              echo  "<tr bgcolor='#C1D0EE'><td><b>Indications</b> </td></tr>";
               echo  "<tr bgcolor='#CCD0EE'><td>$data[ind] </td></tr>";
                 echo  "<tr bgcolor='#C1D0EE'><td><b>Dosage</b></td></tr>";
                  echo  "<tr bgcolor='#CCD0EE'><td>$data[dos]  </td></tr>";
                    echo  "<tr bgcolor='#C1D0EE'><td><b>Contraindications </b></td></tr>";
                     echo  "<tr bgcolor='#CCD0EE'><td>$data[contra]  </td></tr>";
                       
       
  
}

    
?>


</form>


<?php
 echo " <tr ><td><a href='javascript:history.back(1)'>Click here to go back</a> </td></tr>" ; 
   echo "</table>";
     include "footer.htm";
?>

