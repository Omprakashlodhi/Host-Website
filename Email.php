<?PHP
	
	$uemail = $_GET['email'];
	
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
	
	
		$sql = "INSERT INTO `Email`(`Email`) VALUES('$email');";
		if(mysqli_query($con,$sql))
		{
echo '<script type="text/javascript">

          window.onload = function () { alert("Message send successfully"); }

</script>';
		}
		else
		{
		    echo "Something went wrong...";

		}
	
	
	mysqli_close($con);
?>
	mysqli_close($con);
?>