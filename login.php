<?php
$conn=new mysqli("localhost","root","","web-project");
if($conn->connect_error)
{
    echo("CONNECTION Failed");
    // echo("Connection failed: "$conn->connect_error);
}else{
   

    $email=$_POST['email'];
    $password=$_POST['psw'];
    $sql="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();
        header("Location:home.php");
        session_start();
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['user_id'];
        $_SESSION['password']=$row['password'];
        $_SESSION['username']=$row['username'];
        $_SESSION['status'] = "Login Successful";

    }else{
        session_start();
        $_SESSION['status'] = "Wrong email or password";

      header("Location:index.php");
      
    }
}
?>