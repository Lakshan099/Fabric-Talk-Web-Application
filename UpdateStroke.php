<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Stroke</title>
<link rel="stylesheet" type="text/css" href="VstrockCss.css"/>
</head>

<body>
	

	
<form id="form1" name="form1" method="post">

<table width="551" height="702" border="0" align="center">
  <tbody>
 
<form id="form2" name="form2" method="post">

    <tr>
		<td height="70" colspan="2" bgcolor="#c4996c"><h1>Update Stroke</h1></td>
      </tr>
	    <tr>
		<td>ID:</td>
      <td>
        <input type="text" name="txtID" id="txtID"></td>
    </tr>
	  
<?php
	
	$ID = $_POST["txtID"]; 
	$con = mysqli_connect("localhost","root","","fabric_talk");
					 
		if(!$con)
		{
			die("Cannot connect to DB Server");
		}
	
	 $sql = "SELECT * FROM `bedcovers` WHERE `ID` = '".$ID."';";
	
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
			$row=mysqli_fetch_assoc($result);
	
?>
<tr><td colspan="2"><input type="submit" name="submit" id="submit" value="Show"></td></tr>		
</form>
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
      <td><input type="button" name="button2" id="button2" onclick="document.location='AdminPage.html'" value="Back"></td>
      </tr>	  
	  
  </tbody>
</table>
</form>	

	<?php
		
	 }
	
	?>

	
</body>
</html>