<?php
$conn=new mysqli("localhost","root","","web-project");
if($conn->connect_error)
{
    echo("CONNECTION Failed");
    // echo("Connection failed: "$conn->connect_error);
}else{
   

   session_start();
   session_destroy ();
   header("Location:index.php");

}
?>