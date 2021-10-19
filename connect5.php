<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'contact1';
$conn = new mysqli($server, $user, $password, $dbname);

$name = $_POST['name'];
	
	$email = $_POST['email'];
	
	$password = $_POST['message'];

	

if($conn->connect_error)
{
    die("connection failed :" .$conn->connect_error);
}

$sql = "INSERT INTO  contact1_table (name,email,messages) VALUES ('$name','$email','$password')";
if($conn->query($sql) === TRUE)
{
    $message = "Register Successfully.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>
    window.location = '".$_SERVER['HTTP_REFERER']."';
    </script>";
}
else
{
    echo "Error :" .$sql. "<br>" .$conn->error;
}
$conn->close();
?>