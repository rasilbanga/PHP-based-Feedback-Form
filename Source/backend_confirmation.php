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
		if (isset($_POST['confirmation_button'])) 
		{
			$feed_email = $_POST['confirmation_button'];

            header( 'Location: feedback.html?myParam='.$feed_email.'');
       	}

    }
?>