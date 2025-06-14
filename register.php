<?php

$conn = new mysqli("localhost:3307","root","", "reg");

if($conn->connect_error){
    die("Connection failed.".$conn->connect_error);
}

$name = $_POST["name"];
$age = $_POST["age"];

$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$course = $_POST["course"];
$address = $_POST["address"];

$sql = "INSERT INTO students (name,age,gender,email,phone,course,address)
VALUES ('$name','$age','$gender','$email','$phone','$course','$address')";

$result = $conn->query($sql); 

if ($result === TRUE){
    echo "<h2> Student Registered Successfully </h2>";
    
    header("Location:success.html");
exit();
}
else{
    echo "Error : ".$conn->error;
}

?>
