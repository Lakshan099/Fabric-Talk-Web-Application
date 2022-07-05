<!DOCTYPE html>
<html>
<head>
	<title>Send</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php


	if(isset($_POST["btnsubmit"]))
	{
		
		$fristname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		
		if(!empty($_POST["country"]))
		{
			$country = $_POST["country"];
		}
		
		$subject = $_POST["subject"];
		
		$con = mysqli_connect("localhost","root","","fabric_talk");
					 
			if(!$con)
			{
				die("Cannot connect to DB Server");
			}
		
		$sql = "INSERT INTO `contact`(`ID`, `Fname`, `Lname`, `Country`, `Subject`) VALUES ('null','".$fristname."','".$lastname."','".$country."','".$subject."');";
		
		mysqli_query($con,$sql);
		
			echo '<script type="text/javascript">
        		swal({
            		title: "Successfull",
            		text: "Successfully Send",
            		icon: "success",
            		buttons: false,
        		});
            		window.setTimeout(function(){
                
            		window.location.href="Contact us.html";
                    
            		}, 3000);
                          
        		</script>';
		
	
			
		header('Location:index.html');
	
	}
		
	
?>
