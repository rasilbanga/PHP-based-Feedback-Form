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
	
    if (isset($_POST['submit_feedback'])) 
	{

		$Feedback_email = $_POST['feedback_emailID'];
		$Feedback_ratings = $_POST['feedback_Rating'];
		$Feedback_message = $_POST['feedback_message'];

        $sql = "INSERT INTO feedback(Email_id ,Ratings , Comments) VALUES ('$Feedback_email' ,'$Feedback_ratings' , '$Feedback_message')";
    
        $result = $conn->query($sql);

        if($result == True)
        {
        	/*echo "<script type='text/javascript'>alert('FEEDBACK ADDED SUCCESSFULLY');
        	window.location= 'confirmation.html';
       		</script>";*/
            header('Location: confirmation.html?myParam='.$Feedback_email.'');
        }
      
        else
        {
        	echo "<script type='text/javascript'>alert('ERROR! Feedback not added');
        	window.location='index.html';
        	</script>";
        }

	}

}

?>