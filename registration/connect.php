<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email1=$_POST['email1'];
$p=$_POST['p'];
$cp=$_POST['cp'];

// database connection
$conn=new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed': '.$conn->connect_error');
}else{
    $stmt=$conn->prepare("Insert into registration(fname,lname,email1,p,cp")
    values(?,?,?,?,?)");
    $stmt->blind_param("sssss",$fname,$lname,$email1,$p,$cp);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>