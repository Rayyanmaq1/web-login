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
    session_start();
    
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert-danger" role="alert">
               <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status']);
    }

?>
    <div class="outer-Container">

      <div class="inner-Container">

        <div>
          <div class="icon-circle">
            <img src="assets/icons8-male-user.gif" alt="" id="gif-image">
          </div>
          <h1 class="heading">Register</h1>
          <form action="register.php" method="post">

            <div class="input-container">
              <i class="fa fa-envelope icon">
                <img src="assets/icons8-envelope-96.png" id="icon">
              </i>
              <input class="input-field" type="text" placeholder="Email" name="email" required >
            </div>
            <div class="input-container">
              <i class="fa fa-envelope icon">
                <img src="assets\icons8-registration-96.png" id="icon">
              </i>
              <input class="input-field" type="text" placeholder="Username" name="username"required >
            </div>

            <div class="input-container">

              <i class="fa fa-key icon">
                <img src="assets/icons8-password-1-100.png" id="icon">

              </i>
              <input class="input-field" type="password" placeholder="Password" name="psw" required>
            </div>


            <!-- <div class="btm-fun">
              <div class="btm-remember">
                <input type="checkbox" name="remember" value="remember">
                Remember me
              </div>
              <div class="btm-forget">
                <a href="#">Forgot password?</a>
              </div>
            </div> -->


        </div>
        <button class="btm">
          <div class="btnOuter"></div>
          <div class="btnInner">
            <h4>Register</h4>
          </div>
        </button>

        </form>
        <div id="back-arrow">
            <img src="assets/icons8-back-100.png" alt="" width="25" height="20">
        </div>


      
      </div>


    </div>

    </div>

  <script>
    var btn = document.getElementById('back-arrow');
    btn.addEventListener('click', function() {
      document.location.href = 'index.php';
    });
  </script>
</body>

</html>