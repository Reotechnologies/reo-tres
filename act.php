<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>road act</title>
<style type="text/css">
<!--
.style1 {color: #000000}body {
	
	background-image: url(camera-p.jpg);
}
.style3 {color: #F0F0F0}
.style4 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<span class="style1"></span>
<table width="1096" height="103"  align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="140"><div align="center"><img src="policeLogo.jpg" width="101" height="138" /></div></td>
    <td width="831"><img src="defaulters - Copy2.jpg" width="833" height="140" /></td>
    <td width="83"><img src="UG flag.gif" width="150" height="140" /></td>
  
  </tr>
</table>
<table width="1101" height="103"  align="center" bgcolor="#CCCC99">
  <td width="1093"><p align="center" class="style4"> THE TRAFFIC AND ROAD SAFETY ACT, 1998 <br />
      Arrangement of Sections</p><br />
   
      <p align="center">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="29">
          <param name="BGCOLOR" value="" />
          <param name="movie" value="Home.swf" />
          <param name="quality" value="high" />
          <embed src="Home.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="29" ></embed>
        </object>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="29">
        <param name="BGCOLOR" value="" />
        <param name="movie" value="report.swf" />
        <param name="quality" value="high" />
        <embed src="report.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="29" ></embed>
      </object>
      </p>
     
     <?php
$db=mysql_connect('localhost','root')
or die("failed to connect to the data base");
$conn=mysql_select_db('rtots')
or die("failed to select data base");
if(!$conn){
echo "failed to connect";
echo '<br/>';
}

//if(isset($_POST['view'])){ 

//$table=mysql_query("SELECT pricing.*,orders.* from orders,pricing where pricing.CarID=orders.CarID")or die(mysql_error());
$table1=mysql_query("SELECT * from offence")or die(mysql_error());
echo '<div class="scroll">';
echo '<p align="center">&nbsp;</p>';
echo '<p id="Ausers" align="center"><b>TABLE SHOWING OFFENCES</b><p>';
echo '<p align="center"></p>';
echo '<table align="center" border="2" bordercolor=""><tr bgcolor="#0099FF"><th>Offence ID</th>
<th>TRSA 1998</th><th>Aministrator</th><th>Offences</th><th>Fine (Amount(UgShs))</th>
</tr>';
while($row=mysql_fetch_array($table1))
//while($row=mysql_fetch_array($table))
{

echo "<tr>";
//echo "<td>".$row['CarID']."</td>";
echo "<td>".$row['offence_id']."</td>";
//echo "<td>".$row['Price ($)']."</td>";
echo "<td>".$row['TRSA_1998']."</td>";
echo "<td>".$row['off_id']."</td>";
echo "<td>".$row['offence']."</td>";
echo "<td> ".$row['fine']."</td>";
//echo "<td>".$row['PhysicalAd']."</td>";
//echo "<td>".$row['City']."</td>";
//echo "<td>".$row['pcode']."</td>";
//echo "<td>".$row['Country']."</td>";
//echo "<td>".$row['CreditCard']."</td>";
//echo "<td>".$row['CreditNo']."</td>";
echo "</tr>";
}
echo "</table>";
echo '</div>';
//}
?>
    </p>
    <p align="center">&nbsp; </p></td>
 </tr>
</table>
<table width="1098" height="20" border="2" bordercolor="#0066FF" align="center" background="0066FF">
  <tr><td width="1086" bgcolor="#996600"><marquee>
    DESIGNED BY TOTTI AND TRUST TO REDUCE THE ROAD ACTS CONTACT US ON TEL.0772001419/0718797514 EMAIL: totti.dog2@rocketmail.com/trustdaphine@gmail.com
  </marquee></td></tr>
</table>

</body>
</html>
