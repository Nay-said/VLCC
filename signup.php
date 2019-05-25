//This page is for handling new user registration
<?php
session_start();
$server='localhost';
$username='root';
$password='';
$database='VLCC';

$conn=mysqli_connect($server,$username,$password,$database) or die('can not connect');
mysqli_select_db($conn,$database);

$usertitle = $_POST["usertitle"];
$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = ($_POST["password"]);
$email = $_POST["email"];
$city =  $_POST["city"];
$phone =  $_POST["phone"];
$suburb =  $_POST["suburb"];
$address =  $_POST["address"];
$gender =  $_POST["gender"];
$dob =  $_POST["dob"];
$postcode = $_POST["postcode"];

if(!empty($_POST["action"])) {
    if ($_POST["action"] == "edit") {
        $id = $_POST["id"];
        $sql =  "update customer set username ='".$username."',firstname='".$firstname."',lastname='".$lastname."',usertitle='".$usertitle."',email='".$email."',password='".$password."',city='".$city."',phone='".$phone."',suburb='".$suburb."',address='".$address."',gender='".$gender."',dob='".$dob."',postcode='".$postcode."' where id='".$id."'";

        $rs = mysqli_query($conn,$sql) or die(" edit"."<br/><br/>" .mysqli_error());

        $result=mysqli_query($conn,"select * from customer where username='".$username."'")or die("select * from customer"."<br/><br/>" .mysqli_error());

        $row=mysqli_fetch_assoc($result);

        mysqli_close($conn);

        $_SESSION['user'] = $row;

        header('Location: signup.php?edit=success');
        exit;
    }
}
    else{
        $sql =  "INSERT INTO user (usertitle,firstname,lastname,email,password,username,city,phone,suburb,address,gender,postcode,dob) VALUES ('".$usertitle."','".$firstname."','".$lastname."','".$email."','".$password."','".$username."','".$city."','".$phone."','".$suburb."','".$address."','".$gender."','".$postcode."','".$dob."')";

        $rs = mysqli_query($conn,$sql) or die(" Sorry"."<br/>" .mysqli_error());
    
        mysqli_close($conn);
    
        if($rs == true){
            header('Location: register.php?register=successful');
            exit;
        }
    }

?>