<?php
session_start();
include('head.php');


$name = $_POST['sname'];
$email = $_POST['semail'];
$roll_number = $_POST['roll_number'];
$password = $_POST['con-password'];

    $sql="INSERT INTO student(name,email,roll_number,con_password) VALUES ('$name','$email','$roll_number','$password')";

    if(mysqli_query($con,$sql)){
        echo " Hello {$name} your record is saved";
        header('location:login.php');
    }else{
        echo "Record not saved";
    }

?>

