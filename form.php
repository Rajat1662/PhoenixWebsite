<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
?>

$conn = new mysqli('localhost','root','',test);
if($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error');    
}else{
    $stmt = $conn->prepare("insert into registration(Name,Email,Subject,Message) values(?,?,?,?)")
    $stmt->bind_param("ssss",$Name, $Email, $Subject, $Message);
    $stmt->execute();
    echo "registration sucessfull...";
    $stmt->close()
}