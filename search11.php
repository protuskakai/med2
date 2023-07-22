<?php

  include "net.php";
  include "header.htm";
$fld = $_GET["fld"];
$val = $_GET["val"];


$sql0 = "select count(seq) as cnt  from herbs where $fld   like '%".$val."%' order by engnam";
//echo $sql;
//$result0= mysqli_query($dbi,$sql0);

// $data0 = mysqli_fetch_array($result0);
// echo $data0['cnt'];

$sql = "select seq,engnam,botnam   from herbs where $fld   like '%".$val."%' group by seq,engnam,botnam";
//echo $sql;
$result= mysqli_query($dbi,$sql);
//$data = mysqli_fetch_array($result);

//  <div style="position: fixed; top: 0px; width:100%; height: 100px;">
      
   
 // <?php 
    echo "<table width='50%' border='0' align='center' cellpadding=3 cellspacing=1>\n" 
     ."<tr bgcolor='#CCE0EE'>\n" 
       ."<td>Ref No.</td>\n"
       ."<td>English Name</td>\n"
       ."<td>Botanical Name</td>\n"
    //     ."<td>Synonym</td>\n"

    //           ."<td>Activities</td>\n"
     //              ."<td>Indications</td>\n"
     //                  ."<td>Dosage</td>\n"
                    ."<td></td>\n"   
      
                      
          
      ."" 
        ."</tr>"; 
    //    echo "</table>";
    //    echo "</div>";
   // echo     "<div style='margin-top: 100px;'>";
    //   echo "<table width='90%' border='0' align='center'>\n" ;
   $c=0;    
        
        while ($data = mysqli_fetch_array($result))
 {
   $c=$c+1;
     $cleanQuery = str_replace(" ","+",$data['engnam']);
        $en = 'http://www.google.com/search?q='.$cleanQuery;
        
         $cleanQuery = str_replace(" ","+",$data['botnam']);
        $bt = 'http://www.google.com/search?q='.$cleanQuery;
      //  $scrape = file_get_contents($url);
 
  echo "\n\n<tr bgcolor='#CCD0EE'>\n" 
 
           ."<td><a href='addrec.php?seq=$data[seq]'>$c</a> </td>\n"
          ."<td><a href='$en'>$data[engnam]</a> </td>\n"
            ."<td><a href='$bt'>$data[botnam]</a> </td>\n"
   //        ."<td>$data[syn] </td>\n"
   //         ."<td>$data[acts] </td>\n"
   //         ."<td>$data[ind] </td>\n"
   //         ."<td>$data[dos]  </td>\n"
            ."<td><a href='search3.php?seq=$data[seq]'>View Details  </a></td>\n"
                       
       
            ."</tr>"; 
}
?>


</form>


<?php

// echo "</table><table width='50%' border='0' align='center' cellpadding=3 cellspacing=1><tr><td><br> <a href='javascript:history.back(1)'>Click here to go back</a></td></tr></table>" ; 
 
 include "footer.htm";
?>

