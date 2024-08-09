<?php
$username=$_POST['username'];
$password=$_POST['password'];

//Database connection
$conn = new mysqli('localhost:4000','root','','users');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into law(username,password)
    values(?, ?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo"Login Successfull";
    $stmt->close();
    $conn->close();
}
?>