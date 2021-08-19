<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pass'];
$con=new mysqli("localhost","root","","groceries");   
$sql = "select * from userdata where Username = '$username';";
$res = $con->query($sql);

if(!$res){
    header("Location: error.php");
}
$row = $res->fetch_assoc();
if($password==$row['Password']){
    $_SESSION["nameu"] = $row["Name"];
    $_SESSION["user"] = $row["Username"];    
    header("Location: grocer.php");
}else{
    header("Location: error.php");
}
?>


