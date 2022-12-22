<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.9/sweetalert2.min.css">
  <title>Sign Up</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:Login.php');
}
$rq=0;

include "inscription.php";
if(!empty($_POST)){
 if (contact($_POST)){
   $rq=1;
 }

}

?>

  <!-- Project -->
  <div class="login-wrapper">
    <form action="Signup.php" method="POST" class="form">
      <h2>Sign Up</h2>
      <div class="input-group">
        <input type="text" name="log" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="p" id="CreatePassword" required>
        <label for="CreatePassword">New Password</label>
      </div>
     <div class="input-group">
        <input type="password" name="confp" id="ConfirmePassword" required>
        <label for="ConfirmePassword">Confirme Password</label>
      </div>
      <div class="input-group">
        <input type="text" name="email" id="loginUser" required>
        <label for="loginUser"> Email</label>
      </div>
      <input type="submit" value="Add" name="btn" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
  <script src="main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.9/sweetalert2.all.js"></script>
  <?php
 if($rq==1){

 print"<Script>
 Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Account added succesfully !',
  showConfirmButton: false,
  timer: 1500
})
 </script>";}
 ?>
</body>
</html>