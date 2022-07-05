<?php


	if(isset($_POST["btnsubmit"]))
	{
		
		$fristname = $_POST["txtFristName"];
		$lastname = $_POST["txtLastName"];
		$phone = $_POST["txtPhone"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$bdate = $_POST["Bdate"];
		$ID = $_POST["txtID"];
		$address = $_POST["txtAddress"];
		
		if(!empty($_POST["select"]))
		{
			$gender = $_POST["select"];
		}
		
		if(!empty($_POST["rdoOption"]))
		{
			$service = $_POST["rdoOption"];
		}
		
		
		$con = mysqli_connect("localhost","root","","fabric_talk");
					 
			if(!$con)
			{
				die("Cannot connect to DB Server");
			}
		
		$sql = "INSERT INTO `user`(`UserID`, `Fname`, `Lname`, `Phone`, `Email`, `Password`, `Bday`, `NIC`, `Address`, `Gender`, `Stype`) VALUES ('null','".$fristname."','".$lastname."','".$phone."','".$email."','".$password."','".$bdate."','".$ID."','".$address."','".$gender."','".$service."');";
		
		mysqli_query($con,$sql);
	
			
		header('Location:Login.html');
		
	}
		
	
?>
