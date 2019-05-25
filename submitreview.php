<?php
session_start();
$server='localhost';
$username='root';
$password='';
$database='VLCC';

$conn=mysqli_connect($server,$username,$password,$database) or die('can not connect');
mysqli_select_db($conn,$database);

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql =  "INSERT INTO review (name,email,message) VALUES ('".$name."','".$email."','".$message."')";

        $rs = mysqli_query($conn,$sql) or die(" Sorry"."<br/>" .mysqli_error());
    
        mysqli_close($conn);

        if($rs == true){
            header('Location: review.php');
            exit;
        }
?>