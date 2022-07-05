<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Stroke</title>
<link rel="stylesheet" type="text/css" href="VstrockCss.css"/>
</head>

<body>
<form id="form1" name="form1" method="post">

<table width="551" height="702" border="0" align="center">
  <tbody>
    <tr>
		<td height="70" colspan="2" bgcolor="#c4996c"><h1>Add Bedcovers Stroke</h1></td>
      </tr>
    <tr>
      <td>Name:</td>
      <td>
        <input type="text" name="txtName" id="txtName"></td>
    </tr>
    <tr>
      <td>Type:</td>
      <td>
        <select name="chktype" id="chktype">
		  <option value="Egyptian Cotten">Egyptian Cotten</option>
		  <option value="Chinese Cotten">Chinese Cotten</option>
		  <option value="Italy Cotten">Italy Cotten</option>
		</select>
    </tr>
    <tr>
      <td>Size:</td>
      <td>
          <select name="chkSize" id="chkSize">
		  <option value="60 x 90">60 x 90</option>
		  <option value="90 x 90">90 x 90</option>
		  <option value="100 x 90">100 x 90</option>
		</select>
    </tr>
    <tr>
      <td>Price:</td>
      <td>
        <input type="text" name="txtprice" id="txtprice"></td>
    </tr>
    <tr>
      <td>Quantity:</td>
      <td>
        <input type="text" name="txtQut" id="txtQut"></td>
    </tr>
    <tr>
      <td>Image:</td>
      <td><input type="file" name="fileImage" id="fileImage" />
		
		
			
			<?php
			  
			  if(isset($_POST["submit"]))
			  {
			
				  $image = "uploads/".basename($_FILES["fileImage"]["name"]);
				  
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				  
				  $Name = $_POST["txtName"];
				  
				  $type = $_POST["chktype"];
				  
				  $size = $_POST["chkSize"];
				  
				  $qut = $_POST["txtQut"];
				  
				  $price = $_POST["txtprice"];
				  
				    $con = mysqli_connect("localhost","root","","fabric_talk");
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "INSERT INTO `bedcovers`(`ID`, `Name`, `Type`, `Size`, `Price`, `Quantity`, `path`) VALUES (NULL,'".$Name."','".$type."','".$size."','".$price."','".$qut."','".$image."');";
				  
					  if(mysqli_query($con,$sql))
					  {
						  echo "File Uploaded Sucessfully";
					  }
					  else
					  {
						  echo "Somting went wrong";
					  }
				  
				  
			    }

			  ?>	
		
		
		
		
		</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Add">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
  </tbody>
</table>
</form>

	
</body>
</html>