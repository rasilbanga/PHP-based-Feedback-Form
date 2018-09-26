<?php

$servername = "localhost";
$username = "";
$password = "";
$db = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

else
{
  if(isset($_POST['submit_Signup']))
{

  $Login_Email_Id = $_POST['login_emailID'];
  $Login_Password = $_POST['login_password'] ;

  $sql = "SELECT * FROM registration WHERE Email = '$Login_Email_Id' AND Password = '$Login_Password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result)!= null) 
  {   
    //while($row)
    while($Login_Email_Id == $row['Email'] && $Login_Password == $row['Password'])
    {
      header( 'Location: feedback.html?myParam='.$Login_Email_Id.'');
    } 
  }

  else
  {
    echo "<script type='text/javascript'>alert('YOU ARE NOT USER! REGISTER NOW!!!!');
      window.location='signup.html';
      </script>";
  }
} 

}

?>