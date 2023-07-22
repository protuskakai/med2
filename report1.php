<?php
//include "header.htm";
?>

<html>
  <head>
  <script language="JavaScript"> 
           
            function doSubmit() 
            {
               if(document.report1.fnam.value == '') 
               { 
                      alert('Please enter First Name!'); 
                      document.report1.fnam.focus(); 
                       return false; 
                }             
                
                 if(document.report1.snam.value == '') 
               { 
                      alert('Please enter Surname!'); 
                      document.report1.snam.focus(); 
                       return false; 
                }     
                
                 if(document.report1.dept.value == '') 
               { 
                      alert('Please enter Dept!'); 
                      document.report1.dept.focus(); 
                       return false; 
                }                         
                 if(document.report1.reg.value == '') 
               { 
                      alert('Please select Region!'); 
                      document.report1.reg.focus(); 
                       return false; 
                }              
                 if(document.report1.telno.value == '') 
               { 
                      alert('Please enter Telephone No.!'); 
                      document.report1.telno.focus(); 
                       return false; 
                }                  
                 if(document.report1.ext.value == '') 
               { 
                      alert('Please enter Telephone Ext!'); 
                      document.report1.ext.focus(); 
                       return false; 
                }         
                    if(document.report1.email.value == '') 
               { 
                      alert('Please enter Email Address!'); 
                      document.report1.email.focus(); 
                       return false; 
                }                 
                 if(document.report1.problem.value == '') 
               { 
                      alert('Please select problem!'); 
                      document.report1.problem.focus(); 
                       return false; 
                }    
                
                  if(document.report1.descp.value == '') 
               { 
                      alert('Please enter description!'); 
                      document.report1.descp.focus(); 
                       return false; 
                }      
                
                
                  if(document.report1.urgency.value == '') 
               { 
                      alert('Please select level of urgency!'); 
                      document.report1.urgency.focus(); 
                       return false; 
                }                                
               document.report1.submit(); 
               return true;   
            } 
    </script> 
</head>

<?php


?>
<b>Log an ICT call</b> 

<form method="post" name="report1" action="report2.php">
<table width="100%" border="0" cellspacing="8" cellpadding="5" bgcolor="#CDDFED"  align=center>

<tr>
	<td  width="20%"> English Name:</td>
	<td ><input type="text" size="60" name="engnam" value="" </td>	
</tr>
<tr>
	<td>Botanical Name:</td>
<td ><input type="text" size="60" name="botnam" value="" </td>	
</tr>
<tr>
	<td>Synonym:</td>
	<td ><textarea type="text" name="syn"   rows="3" cols="50"></textarea></td>	
</tr>

</tr>
<tr>
	<td>Activities:</td>
<td ><textarea type="text" name="acts"   rows="3" cols="50"></textarea></td>	
</tr>
<tr>
	<td>Indications:</td>
	<td ><textarea type="text" name="ind"   rows="3" cols="50"></textarea></td>	
</tr>
<tr>
	<td>Dosages:</td>
<td ><textarea type="text" name="dos"   rows="3" cols="50"></textarea></td>	
</tr>

<tr>
	<td>Contraindications:</td>
<td ><textarea type="text" name="contra"   rows="3" cols="50"></textarea></td>	
</tr>








<tr><td><input type="submit"  name="Submit"   value="Save"></td><td><input type="reset"></td></tr>



</table>


</form>




<?php
 //echo "<br> <a href='javascript:history.back(1)'><img src='BACK.BMP' width='12' height='16' border='0' alt=''><img src='back2.gif' width='47' height='16' border='0' alt=''></a>" ; 
  //include "footer.htm";
?>