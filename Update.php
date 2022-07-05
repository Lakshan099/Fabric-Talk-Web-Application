<?php
if(!isset($_SESSION["ID"]))
{
	header('Location:AdminPage.html');
} 
			  
			  if(isset($_POST["submit"]))
			  {
				  $ID = $_POST["txtFullName"];
				  $image = "uploads/".basename($_FILES["fileImage"]["name"]);
				  
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				  
				  $Name = $_POST["txtName"];
				  
				  $type = $_POST["txttype"];
				  
				  $size = $_POST["txttype"];
				  
				  $qut = $_POST["txtQut"];
				  
				  $price = $_POST["txtprice"];
				  
				    $con = mysqli_connect("localhost","root","","fabric_talk");
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "UPDATE `bedcovers` SET `ID`='".$ID."',`Name`='".$Name."',`Type`='".$type."',`Size`='".$size."',`Price`='".$price."',`Quantity`='".$qut."',`path`='".$image."' WHERE `ID` = '".$_SESSION["ID"]."';";
				  
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