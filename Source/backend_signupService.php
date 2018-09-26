<?php
$servername = "localhost";
$username = "";
$password = "";
$db = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
else
{
	if (isset($_POST['submit_Info']))
	{
		$Signup_fullname = $_POST['signup_fname'];
		$Signup_gender = $_POST['signup_gender'];
		$Signup_contactno = $_POST['signup_contactInfo'];
		$Signup_email = $_POST['signup_emailID'];
		$Signup_password = $_POST['signup_password'];
		$Signup_state = $_POST['signup_state'];
		$Signup_pincode = $_POST['signup_pinCode'];

		$sql = "INSERT INTO registration(Full_name , Gender, Contact_no , Email , Password , State , Pincode) VALUES ('$Signup_fullname', '$Signup_gender' , '$Signup_contactno'  , '$Signup_email' , '$Signup_password' , '$Signup_state' , '$Signup_pincode')";

		$result = $conn->query($sql);

		if ($result == TRUE)
		{
			//echo "<script type='text/javascript'>alert('USER WANT TO GIVE SOME FEEDBACK!!!!  HERE YOU GO!!');
            //</script>";
            header( 'Location: feedback.html?myParam='.$Signup_email.'');
			$sql = "SELECT * FROM registration WHERE Email='$Signup_email' AND Password='$Signup_password'";
			$res = mysqli_query($conn, $sql);
			$data = array();
			while ($row = mysqli_fetch_assoc($res))
			{
				$data[] = $row;
			}
			$array = json_encode($data);
			file_put_contents('user_data/data.json', $array);
		}
		else
		{
			echo "<script type='text/javascript'>alert('ERROR');
			window.location='index.html';</script>";
		}
	}
}

?>