<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 

?>
    <div class="outer-Container">

      <div class="inner-Container">

        <div>
         
          <h1 class="heading">Welcome</h1>
          <?php 
        session_start();
    
       if(($_SESSION['status']=='Login Successful'))
      {
        ?>

            <div class="userInfo">
              <h5>
            Username: <?= $_SESSION['username']; ?>
              </h5>
              <h5>
            Email: <?= $_SESSION['email']; ?>
              </h5>
            </div>

            <form action="logout.php" method="post">
              <button type="submit" class="btn-logout" name="logout">Logout</button>
            </form>

        <?php 
    }else{
      header("Location:index.php");
    }

?>

       
      </div>
    </div>
    </div>
</body>
</html>