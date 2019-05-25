<?php
    $database='VLCC';
  
    $conn=mysqli_connect('localhost','root','',$database) or
    die ('Sorry...Can Not Connect !');
    mysqli_select_db($conn,$database);
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query="SELECT * FROM user WHERE username='$username'";

    $result=mysqli_query($conn,$query) or die ("Sorry"."<br/><br/>" .mysqli_error());

    if($result){
        print "Query Success";
    }else{
        die("Error 1".mysqli_error());
    }

    $row=mysqli_fetch_assoc($result);

    if ($row !=null){
        if($row["password"] == $password){
            $_SESSION['user']=$username;
            session_write_close();
            header('location: index.php?login=true');
            exit;
        }
        else{
            header('Location: index.php?login=false');
            die("Error 2".mysqli_error($conn));
            exit;
        }
    }    
    else{
        header('Location: index.php?login=false');
        die("Error 3".mysqli_error($conn));
        exit;
    }
?>