<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bedcovers</title>
<link rel="stylesheet" type="text/css" href="BeadCoverCss.css"/>
</head>

<body>
	
<table width="1224" height="1259" border="0" align="center">
  <tbody>
    <tr>
		<td height="85" colspan="4" bgcolor="#c4996c"><div class="p1">Bedcovers</div></td>
    </tr>
    <tr>
		<?php
					
					 $con = mysqli_connect("localhost","root","","fabric_talk");
					 $url="pay.php";
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "SELECT * FROM `bedcovers`;";
				  
					$result = (mysqli_query($con,$sql));
				
					if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							echo "
				
								<tr>
								<td><br><div class='p2'><img src='".$row["path"]."' width='300' height='300'></div></td></tr>
								<tr><td width='226'><div class='p2'><br>No - ".$row["ID"]."</div></td></tr>
								<tr><td width='89'><div class='p2'>".$row["Name"]."</div></td></tr>
								<tr><td width='89'><div class='p2'>Fabric Type - ".$row["Type"]."</div></td></tr>
								<tr><td width='89'><div class='p2'>Size - ".$row["Size"]."</div></td></tr>
								<tr><td width='89'><div class='p2'>Price - Rs ".$row["Price"]."/=<br><br></div></td></tr> 
          						<tr><td width='89'><div class='p2'><input type='button' name='button' id='button' onclick=window.location.href='LogIn2.html' value='Oder Now'><br></div></td></tr> ";
							
			  
			  		    }
					
				}
					
			?>	  
		
    </tr><br><br><br>
	<tr>
	  <td height="68" colspan="7"><input type="button" name="button" id="button" onclick="document.location='index.html'" value="Back"></td>
  </tr>
	<tr>
		<td height="68" colspan="7" bgcolor="#464646"><div class="p4">
            <p class="pfoot">All Rights Reserved. © 2021</p>
          </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
