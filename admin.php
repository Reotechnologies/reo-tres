<?php
include("rtots_lib.php");
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
                                  <script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
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


  <script type="text/javascript" >
  

function val(){
//var rank=document.getElementById("orank");
var myfname=document.getElementById("ofname");
var mylname=document.getElementById("olname");
var myuname=document.getElementById("uname");
var mypassword=document.getElementById("pass");
var mytel=document.getElementById("fon");
var mystation=document.getElementById("station");

//var pos=rank.value.search(/^([A-Za-z])/);
var pos1=myfname.value.search(/^([A-Za-z])/);
var pos2=mylname.value.search(/^([A-Za-z])/);
var pos3=myuname.value.search(/^([A-Za-z])/);
var pos4=mypassword.value.search(/^([A-Za-z0-9]{3})/);
var pos5=mytel.value.search(/^([0-9]{10})/);
var pos6=mystation.value.search(/^([A-Za-z0-9]{2})/);

/*if(pos!= 0){
alert("The Officer's rank you entered(" + rank.value + ") is not correct");
rank.focus();
rank.select();
return false;
}*/
if(pos1!=0){
alert("The Officer's First Name you entered("+myfname.value+") is not correct");
myfname.focus();
myfname.select();
return false;
}
if(pos2!= 0){
alert("The Officer's Last Name you entered(" + mylname.value + ") is not correct");
mylname.focus();
mylname.select();
return false;
}
if(pos3!=0){
alert("The Officer's User Name you entered("+myuname.value+") is not correct");
myuname.focus();
myuname.select();
return false;
}
if(pos4!=0){
alert("The password you entered("+mypassword.value+") is invalid, must have atleast 3 characters");
mypassword.focus();
mypassword.select();
return false;
}
if(pos5!=0){
alert("The Officer's Telephone Number you entered("+mytel.value+") is invalid, must have atleast 10 characters");
mytel.focus();
mytel.select();
return false;
}
if(pos6!=0){
alert("The Officer's Station ID you entered("+mystation.value+") is not correct");
mystation.focus();
mystation.select();
return false;
}

}
function valoffences(){
  var o=document.getElementById("offences");
   var s=document.getElementById("s");
   var off=document.getElementById("off");
    var offence=document.getElementById("offence");
	 var fine=document.getElementById("fine");
var pos=o.value.search(/^([0-9])/);
var pos1=s.value.search(/^([A-Za-z0-9]{2})/);
var pos2=off.value.search(/^([A-Za-z0-9]{2})/);
var pos3=offence.value.search(/^([A-Za-z])/);
var pos4=fine.value.search(/^([0-9])/);
if(pos!=0){
alert("The offence ID you entered("+o.value+") is not correct");
o.focus();
o.select();
return false;
}
if(pos1!=0){
alert("The Sec of TRSA 1998 you entered("+s.value+") is not correct");
s.focus();
s.select();
return false;
}
if(pos2!=0){
alert("The officer ID you entered("+off.value+") is not correct");
off.focus();
off.select();
return false;
}
if(pos3!=0){
alert("The offence you entered("+offence.value+") is not correct");
offence.focus();
offence.select();
return false;
}
if(pos4!=0){
  alert("The fine you entered("+fine.value+") is not correct");
fine.focus();
fine.select();
return false;
}

}
function valupdate(){
  var off=document.getElementById("off");
  var pos=off.value.search(/^([A-Za-z0-9]{2})/);
  if(pos!=0){
alert("The track ID you entered("+off.value+") is not correct");
off.focus();
off.select();
return false;
}}
function valtranfer(){
  var off=document.getElementById("s");
   var s=document.getElementById("o");
  var pos=off.value.search(/^([A-Za-z0-9]{2})/);
   var pos1=s.value.search(/^([A-Za-z0-9]{2})/);
  if(pos!=0){
alert("The officer ID you entered("+off.value+") is not correct");
off.focus();
off.select();
return false;
}
if(pos1!=0){
alert("The station ID you entered("+s.value+") is not correct");
s.focus();
s.select();
return false;
}
}
</script>

</head>

<body>
<span class="style1"></span>
<table width="1096" height="103"  align="center"bgcolor="#FFFFFF">
  <tr>
    <td width="140"><div align="center"><img src="policeLogo.jpg" width="102" height="135" /></div></td>
    <td width="831"><img src="Untitled-1e.jpg" width="822" height="140" /></td>
    <td width="83"><img src="UG flag.gif" width="150" height="140" /></td>
  
  </tr>
</table>
<table width="1096" height="103"  align="center" bgcolor="#CCCC99">
  <td width="678" bgcolor="#594928">
    <p>
	<?php
	OFFICER_details ();
	 $officerID=generateOfficerID("Traffic");
	  $officerID1=generateOfficerID1("Admin");
	  if(isset($_POST['submitreg'])){
	  echo'
	 
      <form name="kj" method="post" action="admin.php" width="200" height="439" onsubmit="return val()" >
	    <P align="center"  ><BR><BLINK>REGISTER THE OFFICERS</BLINK></BR></P>
<table width="59%" height="335" align="center"  >
<tr>
  <td>Rank:</td>
  <td><select name="select">
    <option>Administrator</option>
    <option>Traffic officer</option>
  </select></td>
</tr>
   <td> First Name:</td>
  <td><input type="text" name="fname" id="ofname" /></td></tr>
   <td> Last Name:</td>
  <td><input type="text" name="lname" id="olname" /></td></tr>
<tr><td> Officer ID:</td>
<td><label>
<select name="select2">
    <option> '.$officerID.'</option>
    <option> '.$officerID1.'</option>
  </select>
                      
</label></td></tr>
<tr><td> User Name:</td><td><input type="text" name="uname" id= "uname" /></td></tr>
    <td>Password:</td> <td><input type="password" name="pass"  id= "pass"/></td></tr>
	  <tr><td>Photo:</td><td><input type="file" name="photo"/></td></tr><tr>
  <td>Phone Number :</td> <td><input type="text" name="pnumber" id= "fon" /></td></tr>
  <td>Station ID :</td> <td><input type="text" name="s_id" id= "station" /></td></tr>
<tr><td></td><td><img src="user_add.png" /><input type="submit" name="submit" value="Register">&nbsp;
<input type="reset" name="reset" value="Reset"></td></tr>
</table>
 
      </form>';}
	 
/////////////////////////////////////////////////////////////////////////////////////////////	  
	  //regoffences
if(isset($_POST['submitregoffences'])){
	echo '	<P align="center"  ><BR><BLINK>REGISTER THE OFFENCES</BLINK></BR></P>
	 <form name="kj" method="post" action="admin.php" onsubmit="return valoffences()">
<table width="64%" height="219" align="center"  >
 <td>Offence ID:</td><td><input type="text" name="o_id11" id= "offences"/></td></tr>
 <td>Sec of TRSA 1998 :</td><td><input type="text" name="trsa" id= "s"/></td></tr>
<tr><td> Officer ID:</td><td><input type="text" name="a_id" id= "off"/></td></tr>
<tr><td>Offence:</td><td><input type="text" name="offence11" id= "offence"/></td></tr>
<td>Fine (Amount(UgShs)) :</td><td><input type="text" name="fine" id= "fine"/></td></tr>
<tr><td></td><td><input type="submit" name="submit9" value="Register">&nbsp;
<input type="reset" name="reset" value="Reset"></td></tr>
</table>
</form>';}
////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////form for tansfer of officers
if(isset($_POST['updatetranfer'])){
	  echo' 
	  <P align="center"  ><BR><BLINK> TRANSFERING OFFICERS.
</BLINK></BR></P>
 <form name="kj" method="post" action="admin.php" onsubmit="return valtranfer()">
    <table width="50%" height="209" align="center"  >
  <tr> <td>Officer ID:</td><td><input type="text" name="t_id" id="s"/></td> </tr>
  <td> Station ID(New):</td><td><input type="text" name="s_id" id= "o"/></td></tr>
<tr><td></td><td><input type="submit" name="submittranfer" value="OK">&nbsp;
<input type="reset" name="reset" value="Reset"></td></tr>
  </table>
 
</form>';}
if(isset($_POST['update'])){
	  echo' 
	  <P align="center"  ><BR><BLINK> UPDATE TRACK DETAILS</BLINK></BR></P>
 <form name="kj" method="post" action="admin.php" onsubmit="return valupdate()">
    <table width=40%" height="199" align="center"  >
  <tr> <td>Track ID:</td><td><input type="text" name="t_id" id="off"/></td> </tr>
  <tr> <td>Comment:</td><td><input type="text" name="c_id" /></td> </tr>
  <tr><td> Status:</td><td><label>
  <select name="select">
    <option>Yes</option>
    <option>No</option>
  </select> </label></td></tr>
<tr><td></td><td><input type="submit" name="submitup" value="OK">&nbsp;
<input type="reset" name="reset" value="Reset"></td></tr>
  </table>
 
</form>';}



 
if(isset($_POST['Submit'])){ 

/////////////////////////////////////////TRACK DETAILS
$table=mysql_query("SELECT officers.*,track.* from officers,track where officers.off_id=track.off_id")or die(mysql_error());
//$table1=mysql_query("SELECT * from track")or die(mysql_error());
echo '<div class="scroll">';
echo '<p align="center">&nbsp;</p>';
echo '<p id="Ausers" align="center"><b> THE TRACK DETAILS</b><p>';
echo '<p align="center"></p>';
echo '<table align="center"  bordercolor="">
<tr bgcolor="#0099FF">

<th>Officer Name</th>
<th>Date Of Track</th>
<th>Direction</th>
<th>Track ID</th>
<th>Status</th>
<th>Comment</th>
<th>Photo</th>

</tr>';
//while($row=mysql_fetch_array($table1))
while($row=mysql_fetch_array($table))
{

echo "<tr bgcolor='#FFFFFF'>";
echo "<td>".$row['lname']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['direction']."</td>";
echo "<td>".$row['t_id']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td> ".$row['comments']."</td>";
echo "<td align='left'>".'<div class="product_img"><img src="pics/'.$row['photo'].'"width="100" height="100" />        </div>'."</td>";
echo "</tr>";
}
echo "</table>";
echo '</div>';
} 
	  
	   if($result){
echo "Data successfully submited";
}
	?>
	</p>

  <div class="slide">

  <div id="slider_container_1">
                
                <div id="SliderName" align="center">
                    <img src="images,.jpg"  width="325" height="258"  title="Description from Image Title" />                  
                  
                    <img src="images000.jpg" width="325" height="258" style="float:left;margin-right:5px;" />
                    
            
                <img src="okty.jpg" width="325" height="258" />           
				 <img src="IMG_1827.jpg" width="325" height="258" /> 
				  <img src="images2222.jpg" width="325" height="258" /> 
				  <img src="images001.jpg" width="325" height="258" /> 
				   <img src="images4444.jpg" width="325" height="258" /> 
                  
          </div>
            <div class="c"></div>
            <div id="SliderNameNavigation"></div>
            <div class="c"></div>
      
      <script type="text/javascript">

          // we created new effect and called it 'demo01'. We use this name later.
          Sliderman.effect({name: 'demo01', cols: 5, rows: 1, delay: 10, fade: true, order: 'straight_stairs'});

          var demoSlider = Sliderman.slider({container: 'SliderName', width: 290, height: 300, effects: 'demo01',
          display: {
            pause: true, // slider pauses on mouseover
            autoplay: 2000, // 3 seconds slideshow
            always_show_loading: 200, // testing loading mode
            description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
            loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
            buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
            navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
          }});

        </script>
      </div>
</div>
   
  </form>
        <p align="center">Welcome to your local crime, policing and criminal justice</br> SYSTEM for THE Uganda Police</p>  
		<p align="center"><blink>  <br>&quot;Enjoy Your Day Officer!&quot; </br></blink></p>  </td><td width="530" valign="top">
		
		 <?php
       //$today = date("l F j Y g:i a");
$today=date("l F j Y");
            //echo "<b id='dat1'>"."<blink>".$today."</blink>"."</b>";
                           echo date("l F d, Y - h:i:s" ,time()) 
?> 
      <p align="center" class="style4">Every day you assign your officers work to do, reviewoffenders that have been filed and work hard to track and bring them to justice. Thank you for the good work done</p>
      <p align="center" class="style4">BROWSE THROUGH THE FOLLOWING BUTTON;  </p>
      <p align="center">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="29">
        <param name="movie" value="Home.swf" />
        <param name="BGCOLOR" value="#996600" />
        <embed src="Home.swf" width="100" height="29" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#996600" ></embed>
      </object>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="29">
        <param name="BGCOLOR" value="#996600" />
        <param name="movie" value="Report.swf" />
        <param name="quality" value="high" />
        <embed src="Report.swf" width="100" height="29" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#996600" ></embed>
      </object>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="29">
        <param name="BGCOLOR" value="#996600" />
        <param name="movie" value="Deployment.swf" />
        <param name="quality" value="high" />
        <embed src="Deployment.swf" width="100" height="29" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#996600" ></embed>
      </object>
      </p>
	   <form id="form2" name="form2" method="post" action="">
      <p align="center">To  Register Officers
           <input type="submit" name="submitreg" value="Click Here" />
      <img src="user_add.png" /></p>
      <p align="center">To Register Offences 
        <input type="submit" name="submitregoffences" value="Click Here" />
      </p>
      <p align="center">To View Track  
        <input type="submit" name="Submit" value="Click Here" />
      </p>
      <p align="center">To Update Track 
        <input type="submit" name="update" value="Click Here" />
</p>
      <p align="center">To Transfer Officer 
        <input type="submit" name="updatetranfer" value="Click Here" />
      </p>
      <p>Check For Officers And Their Station Details 
        <input type="submit" name="submitregoffst" value="Click Here" />
      </p>
      </form>
	   </p>
      
  <?php
	
	 
	  
	  ?>
  
       <p>
         <?php
$db=mysql_connect('localhost','root')
or die("failed to connect to the data base");
$conn=mysql_select_db('rtots')
or die("failed to select data base");
if($conn){
//echo "<h3>Sucessfully selected </h3>";
echo "</br>";
}
$Rank=$_POST['select'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$off_id=$_POST['select2'];
$uname=$_POST['uname'];
$password=$_POST['pass'];
$photo=$_POST['photo'];
$Pnumber=$_POST['pnumber'];
$station=$_POST['s_id'];
if(isset($_POST['submit'])){
$insert="INSERT INTO officers(rank,fname,lname,off_id,uname,password,photo,pnumber,s_id) VALUES('".$Rank."','".$fname."','".$lname."','".$off_id."','".$uname."','".$password."','".$photo."','".$Pnumber."','".$station."')";
$result=mysql_query($insert);
  if($result){
echo  $fname  ."   ". "is successfully registered as "; 
echo   $Rank  ;
}
else{
echo "NO OFFICER IS REGISTERED";
//echo "we need informtion about you and the bike model! ";
}
}
/////////////////////////////////////////////////////////////////
// inserting data into the tables OF OFFENCE
$o_id9=$_POST['o_id11'];
$sec=$_POST['trsa'];
$a_id221=$_POST['a_id'];
$offence=$_POST['offence11'];
$fine1=$_POST['fine'];

if(isset($_POST['submit9'])){
$insert="INSERT INTO offence(offence_id,TRSA_1998,off_ID,offence,fine)VALUES('".$o_id9."','".$sec."','".$a_id221."','".$offence."','".$fine1."')";
      $result=mysql_query($insert);//or die("error".mysql_error());
if($result){
echo $sec  ."   ". "is successfully been added. "; 

//{

//header("location:regoffences.php");
}
else{
echo "NO OFFENCE IS REGISTERED";
//header("location:regoffences.php");
}
}
/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////tranfer of officers
if(isset($_POST['submittranfer'])){
$Offender_ID9=$_POST['t_id'];
$comm=$_POST['c_id'];
 $status=$_POST['select'];                                         // $todate=date("F j,Y,g:i a");
										  // echo  $todate;
   $update="update track set status='$status',comments='$comm',t_id='$Offender_ID9' where t_id='$Offender_ID9'";
   $result1=mysql_query($update)or die("error in update".mysql_error());//or die("update failed".mysql_error());
if($result1){
echo "Track successfully updated";
}
//else{
//echo "we need informtion about you and the bike model! ";
//}
}

/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////UPDATE TRACK
if(isset($_POST['submitup'])){
$Offender_ID9=$_POST['t_id'];
$comm=$_POST['c_id'];
 $status=$_POST['select'];                                         // $todate=date("F j,Y,g:i a");
										  // echo  $todate;
   $update="update track set status='$status',comments='$comm',t_id='$Offender_ID9' where t_id='$Offender_ID9'";
   $result1=mysql_query($update)or die("error in update".mysql_error());//or die("update failed".mysql_error());
if($result1){
echo "Track successfully updated";
}
//else{
//echo "we need informtion about you and the bike model! ";
//}
}

?>
       </p>
       </td>
 </tr>
</table>
<table width="1098" height="20" border="2" bordercolor="#0066FF" align="center" background="0066FF">
  <tr><td width="1086" bgcolor="#996600"><marquee><img src="UG flag.gif" width="40" height="25" />
    DESIGNED BY TOTTI AND TRUST TO REDUCE THE ROAD ACTS CONTACT US ON TEL.0772001419/0718797514 EMAIL: totti.dog2@rocketmail.com/trustdaphine@gmail.com <img src="UG flag.gif" width="40" height="25" />
  </marquee></td></tr>
</table>

</body>
</html>
