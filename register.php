<?php
$conn=new mysqli("localhost","root","","web-project");
if($conn->connect_error)
{
    echo("CONNECTION Failed");
    // echo("Connection failed: "$conn->connect_error);
}else{
   

    $email=$_POST['email'];
    $password=$_POST['psw'];
    $username=$_POST['username'];
    $sql="SELECT * FROM `users` WHERE `email`='$email'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $_SESSION['status'] = "This Email is already registered";
        header("Location:registeration.php");
    }else{
        $sql="INSERT INTO `users`(`email`, `password`, `username`) VALUES ('$email','$password','$username')";
        $result=$conn->query($sql);
        if($result)
        {
            session_start();
            $_SESSION['status'] = "Registration Successful";
            header("Location:index.php");


        }else{
            session_start();
            $_SESSION['status'] = "Registration Failed";
            header("Location:registeration.php");
        }
      
    }

   
}
?>