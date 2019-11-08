<?PHP
	$ufname = $_GET['fname'];
	$ulname = $_GET['lemail'];
	$uemail = $_GET['email'];
	$usub = $_GET['sub'];
	$umessage = $_GET['message'];
	// Database Connection code
	$servername = "localhost";
	$username = "id11367290_usermessage";
	$password = "81032lodhi@123";
	$dbname = "id11367290_message";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	
	
		$sql = "INSERT INTO `user message`(`Fname`, `Lname`,`Email`, `Subject`, `Message`) VALUES('$ufname','$ulname','$uemail','$usub','$umessage');";
		if(mysqli_query($con,$sql))
		{
                echo '<script type="text/javascript">

               window.onload = function () { alert("Message send successfully");
                }

</script>';
		}
		else
		{
			echo "Something went Wrong...";
		}
	
	
	mysqli_close($con);
?>