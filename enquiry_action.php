<?php


include "connect.php";

// collect data

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$course=$_POST['course'];

// Get current date
$currentDate = date("Y-m-d"); // Format: YYYY-MM-DD






$sql = "INSERT INTO contact (name,phone,email,course,date) 
VALUES ('$name','$phone','$email','$course', '$currentDate')";

if ($conn->query($sql) === TRUE) {
//   echo"<script> window.location='login.php' </script>";
echo"<script>alert('enquiry submitted Successfully!! we’ll get back to you.'); 
window.location='index.php' </script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>