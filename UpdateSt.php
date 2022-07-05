<?php session_start(); 
if(!isset($_SESSION["ID"]))
{
	header('Location:AdminPage.html');
}

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

	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Stroke</title>
<link rel="stylesheet" type="text/css" href="VstrockCss.css"/>
</head>

<body>
<form id="form1" name="form1" method="post" action=Update.php>

<table width="551" height="702" border="0" align="center">
  <tbody>
    <tr>
		<td height="70" colspan="2" bgcolor="#c4996c"><h1>Update Bedcovers Stroke</h1></td>
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
        <select name="chktype" id="chktype" value="<?php echo $row["Type"]; ?>">
		  <option value="Egyptian Cotten">Egyptian Cotten</option>
		  <option value="Chinese Cotten">Chinese Cotten</option>
		  <option value="Italy Cotten">Italy Cotten</option>
		</select>
    </tr>
    <tr>
      <td>Size:</td>
      <td>
          <select name="chkSize" id="chkSize" value="<?php echo $row["Size"]; ?>">
		  <option value="60 x 90">60 x 90</option>
		  <option value="90 x 90">90 x 90</option>
		  <option value="100 x 90">100 x 90</option>
		</select>
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
      <td><input type="file" name="fileImage" id="fileImage" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="button" name="submit" id="submit" onclick="document.location='Update.php'" value="Update">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
  </tbody>
</table>
</form>
	
	
	
</body>
</html>