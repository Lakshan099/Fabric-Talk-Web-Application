<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Details</title>
<link rel="stylesheet" type="text/css" href="tablecss.css"/>
</head>
<body>
	
<h2>Contact Details</h2>
	
<table width="833" height="107" border="0" align="center">
  <tr>
    <td height="37" bgcolor="#C4996C">ID</td>
    <td bgcolor="#C4996C">Frist Name</td>
    <td bgcolor="#C4996C">Last Name</td>
	<td bgcolor="#C4996C">Country</td>
	<td bgcolor="#C4996C">Subject</td>
  </tr>

	<?php
					
					 $con = mysqli_connect("localhost","root","","fabric_talk");
					 $url="pay.php";
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "SELECT * FROM `contact`;";
				  
					$result = (mysqli_query($con,$sql));
					
					while($data = mysqli_fetch_array($result))
{
					?>
					  <tr>
						<td bgcolor="#DDDDDD"><?php echo $data['ID']; ?></td>
						<td bgcolor="#DDDDDD"><?php echo $data['Fname']; ?></td>
						<td bgcolor="#DDDDDD"><?php echo $data['Lname']; ?></td>
						<td bgcolor="#DDDDDD"><?php echo $data['Country']; ?></td>
						<td bgcolor="#DDDDDD"><?php echo $data['Subject']; ?></td>
					  </tr>	
					<?php
					}
					?>
					</table>

					<?php mysqli_close($con);
					
					
	
			
	?>
	
	

</body>
</html>