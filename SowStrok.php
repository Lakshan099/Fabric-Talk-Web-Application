<?php session_start(); 
if(!isset($_SESSION["ID"]))
{
	header('Location:AdminPage.html');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show Strok</title>
<link rel="stylesheet" type="text/css" href="VstrockCss2.css"/>
</head>

<body>

		  
<?php
	
	$con = mysqli_connect("localhost","root","","fabric_talk");
					 
		if(!$con)
		{
			die("Cannot connect to DB Server");
		}
	
	 $sql = "SELECT * FROM `bedcovers` WHERE `ID` = '".$_SESSION["ID"]."';";
	
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
			$row=mysqli_fetch_assoc($result);
	
?>
		
<form id="form1" name="form1" method="post">

<table width="669" height="702" border="0" align="center">
  <tbody>

    <tr>
		<td height="70" colspan="2" bgcolor="#c4996c"><h1>View Stroke</h1></td>
      </tr>
	    <tr>
		<td width="111">ID:</td>
      <td width="430">
        <input type="text" name="txtID" id="txtID" value="<?php echo $row["ID"]; ?>"></td>
    </tr>

    <tr>
      <td>Name:</td>
      <td>
        <input type="text" name="txtName" id="txtName" value="<?php echo $row["Name"]; ?>"></td>
    </tr>
    <tr>
      <td>Type:</td>
      <td>
        <input type="text" name="txtType" id="txtType" value="<?php echo $row["Type"]; ?>"></td>
    </tr>
    <tr>
      <td>Size:</td>
      <td>
        <input type="text" name="txtSize" id="txtSize" value="<?php echo $row["Size"]; ?>"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td>
        <input type="text" name="txtprice" id="txtprice" value="<?php echo $row["Price"]; ?>"></td>
    </tr>
    <tr>
      <td>Quantity:</td>
      <td>
        <input type="text" name="txtQut" id="txtQut" value="<?php echo $row["Quantity"]; ?>"></td>
    </tr>
    <tr>
      <td>Image:</td>
      <td><img src="<?php echo $row["path"]; ?>" width='300' height='300'></td>
    </tr>
    <tr>
      <td><input type="button" name="button2" id="button2" onclick="document.location='AdminPage.html'" value="Back">
        <input type="button" name="button" id="button" onclick="document.location='UpdateSt.php'" value="Update"></td>
      </tr>	  
	  
  </tbody>
</table>
</form>	

	<?php
		
	 }
	
	?>
	
</body>
</html>