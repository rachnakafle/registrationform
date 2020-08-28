<?php
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$text = $_POST['text'];

//create connection
$conn=mysqli_connect('localhost','root','','register');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully";
}

$sql = "INSERT INTO registration (Fullname, Email, Phonenumber, Password, Address)
VALUES ('$username', '$email', '$number', '$password', '$text')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
