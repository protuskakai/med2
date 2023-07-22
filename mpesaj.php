<head>
<style>




</style>
<script>

// var tcode="";
function getpage()
 
{


 // document.getElementById("mm").innerHTML=str+" length="+cnt;
   
    xmlhttp = new XMLHttpRequest();
    //  alert(str);
     xmlhttp.onreadystatechange = function()
             {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                 {
                    document.getElementById("mm2").innerHTML = xmlhttp.responseText;
                }         
             } 
             var fld=    document.getElementById("fld").value;
             var val=    document.getElementById("val").value;
            xmlhttp.open("GET","search11.php?fld="+fld+"&val="+val,true);
            xmlhttp.send();
          //  document.getElementById("qq").innerHTML="MPESA Report (  "+ sel+" : "+val+ "  )";
          //  document.getElementById("qq1").innerHTML="<a href='excel_mpesa.php?dat="+val+"&fld="+sel+">Export to Excel</a";

}



function additem(tcode)
{
 //alert(tcode);
 var mt=document.getElementById("mm3").innerHTML;
  document.getElementById("mm3").innerHTML =mt +" "+ tcode;

}

function clearlist()
{
 //alert(tcode);
 //var mt=document.getElementById("mm3").innerHTML;
  document.getElementById("mm3").innerHTML ="";
   document.getElementById("qq").innerHTML ="";
    document.getElementById("qq1").innerHTML ="";
  document.getElementById("mm2").innerHTML ="";

}
function clean()
{
 //alert(tcode);
 //var mt=document.getElementById("mm3").innerHTML;
  document.getElementById("qq").innerHTML ="";
    document.getElementById("qq1").innerHTML ="";
  document.getElementById("mm2").innerHTML ="";

}

function viewlist()
 
{
  
   myPopup = '';
  var vall=    document.getElementById("mm3").innerHTML;
   var url="mpesaz.php?list="+vall;
    myPopup = window.open(url,'popupWindow','width=740,height=480,top=150,left=450,location=0, titlebar=0');
    if (!myPopup.opener)
         myPopup.opener = self;



}
function checkopt()
{
// alert("sdfddfdf");
   if(opt=="dat")
   {
   
   
 
//alert(document.getElementById("jj").style.top);
 //alert (top);
       var url="calendar.php";
       
  // myPopup = window.open(url,'popupWindow','width=340,height=280,top="+top+",left="+left+",location=0, titlebar=0');
  myPopup = window.open(url,'popupWindow','width=340,height=280,top=150,left=667,location=0, titlebar=0');
    if (!myPopup.opener)
         myPopup.opener = self;
    
   }

 clean();


}



function txtclicked()
{
  var ss= document.getElementById("sel").value
  if (ss =="dat")
  {
     
      var url="calendar.php";
     myPopup = window.open(url,'popupWindow','width=340,height=280,top=150,left=667,location=0, titlebar=0');
   if (!myPopup.opener)
        myPopup.opener = self;
   
  
  
  
  }



}


</script>

</head>

<table width="70%" cellspacing="0" cellpadding="0" bgcolor="#CCE0EE" align=center>
<tr>
	<td>
<?php

//include "header.htm";




?>






<table width="50%" cellspacing="0" cellpadding="0" align=center>
<tr>
	<td><b>Search Parameters</b> </td>
</tr>
</table>




<table width="" border="0" cellspacing="8" cellpadding="5" bgcolor="#CDDFED"  align=center>
<tr>
<td>Search By</td>
<td>
<select id="fld" name="fld" size="1">
<option value=""></option>
  
	<option value="engnam">English Name</option>
		<option value="botnam">Botanical Name</option>
	<option value="syn">Synonym</option>
	<option value="acts">Activities</option>
	
		<option value="ind">Indications</option>
		
	
</select>
</td>


<td>Search Value</td><td><input  type="text"  id="val" size="20" name="val" value="" onkeyup="clean()"></td></tr>

<tr><td><input type="submit"  name="Submit"  value="Search"  onclick="getpage()"></td><td><input type="reset"></td></tr>



</table>



<tr><td><p  id="mm3"></p></td>
<table    bgcolor="#FFFFFF" width=100%>
<tr   bgcolor=#FFFFFF><td><p  id="mm2"   bgcolor=#FFFF80></p></td></tr>
</table>

















