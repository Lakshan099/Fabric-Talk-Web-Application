<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Stroke</title>
<link rel="stylesheet" type="text/css" href="VstrockCss.css"/>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="413" height="307" border="0" align="center">
    <tbody>
      <tr>
        <td width="403" height="69" bgcolor="#c4996c"><h1>View Stroke</h1></td>
      </tr>
      <tr>
        <td height="124">ID:
        <input type="text" name="txtID" id="txtID"></td>
      </tr>		
      <tr>
        <td height="106"><input type="submit" name="btnsubmit" id="btnsubmit" value="Go"></td>
      </tr>
		

		
    </tbody>
  </table>
</form>

	<?php	
	
	if(isset($_POST["btnsubmit"]))
	{
		
		$ID = $_POST["txtID"];
		$_SESSION["ID"] = $ID;
		header('Location:SowStrok.php');
		
	}
?>
	
</body>

		
	
</html>
