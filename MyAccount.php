<?php session_start(); 
if(!isset($_SESSION["email"]))
{
	header('Location:index.html');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel="stylesheet" type="text/css" href="MyAccountCss.css"/>
</head>

<body>

<?php
	
	 $con = mysqli_connect("localhost","root","","fabric_talk");
					 
		if(!$con)
		{
			die("Cannot connect to DB Server");
		}
	
	 $sql = "SELECT * FROM `user` WHERE `Email` = '".$_SESSION["email"]."';";
	
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
			$row=mysqli_fetch_assoc($result);
	
?>
	
<table width="1230" height="937" border="0" align="center">
      <tbody>
        <tr>
          <td height="119" colspan="5"><img src="Pictures/logo.png" width="84" height="105" alt=""/>
            <input type="button" name="button" id="button" onClick="document.location='Sign up.html'" value="Sign up">
            <input type="button" name="button2" id="button2" onClick="document.location='Login.html'" value="Log in"></td>
        </tr>
        <tr>
          <td width="220" height="30" align="center" bgcolor="#c4996c"><div class="tabs"><a href="index.html">Home</a></div></td>
          <td width="227" align="center" bgcolor="#c4996c"><div class="tabs"><a href="AboutUs.html">About us</a></div></td>
          <td width="249" align="center" bgcolor="#c4996c"><div class="tabs"><a href="Bedcovers.html">Beadcovers</a></div></td>
          <td width="262" align="center" bgcolor="#c4996c"><div class="tabs"><a href="Curtains.html">Curtains</a></div></td>
          <td width="240" align="center" bgcolor="#c4996c"><div class="tabs"><a href="ContactUs.html">Contact us</a></div></td>
        </tr>
        <tr>
      <td height="30" colspan="7"><br><br><h2>My Profile</h2></td>
    </tr>
    <tr>
      <td height="440" colspan="7">
	 
	  <p>Frist Name : <input type="text" name="txtFristName" id="txtFristName" value="<?php echo $row["Fname"]; ?> ">
      <br><br> Last Name : <input type="text" name="txtLastName" id="txtLastName" value="<?php echo $row["Lname"]; ?>">
      <br><br> Mobile Number : <input type="text" name="txtPhone" id="txtPhone" value="<?php echo $row["Phone"]; ?>">  
	  <br><br> Email : <input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["Email"]; ?>">  
	  <br><br> Account Password : <input type="text" name="txtPassword" id="txtPassword" value="<?php echo $row["Password"]; ?>">   
	  <br><br> Birth Day : <input type="date" name="Bdate" id="Bdate" value="<?php echo $row["Bday"]; ?>">  
	  <br><br> National Id Number : <input type="text" name="txtID" id="txtID" value="<?php echo $row["NIC"]; ?>"> 
	  <br><br> Address : <input type="text" name="txtAddress" id="txtAddress" value="<?php echo $row["Address"]; ?>"> 
	  <br><br> Gender : <input type="text" name="txtgender" id="txtgender" value="<?php echo $row["Gender"]; ?>"> 
	  <br><br> Service Type : <input type="text" name="txtservice" id="txtservice" value="<?php echo $row["Stype"]; ?>"> 
	   </p></td>
    </tr>
    <tr>
      <td height="40" colspan="7" bgcolor="#FFFFFF"><form name="form2" method="post" action="">
      </form><br><br>
      <input type="submit" name="btnsubmit" id="btnsubmit" onClick="document.location='index.html'" value="Comform" class="btn"></td>
    </tr>
        <tr>
          <td height="68" colspan="7" bgcolor="#464646"><div class="p1">
            <p class="pfoot">All Rights Reserved. © 2021</p>
          </div></td>
        </tr>
      </tbody>
	<?php	
							
		}
		mysqli_close($con);
	?>
    </table>
</body>
</html>
