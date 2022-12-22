<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.9/sweetalert2.min.css">
  <title>Login</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  session_start();
  if(isset($_SESSION['username'])){
      header('location:profile.php');
  }
 function connect($database){
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname="5ademni";

  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      if(!$conn){
          die('Erreur : ' .mysqli_connect_error());
      }
// Initialiser la session


if (isset($database['login'])){
$username = $database['username'];
$Password = $database['password'];



  

$req="select * from user where UserName='$username'and pass='$Password'";

  $result=$conn-> query($req);
$user=$result->fetch();
return $user;

}


}
$user=true;
 
    if(!empty($_POST)){
       $user=connect($_POST);
       
       if(count($user)>0){
        session_start();
         $_SESSION['username']=$user['UserName'];
         $_SESSION['password ']=$user['pass'];
        header ("location:profile.php");
        }
      }
       ?>

  <video autoplay muted loop id="bg-video">
    <source src="video/Office Background Video (Extended 6-min).mp4" type="video/mp4">
</video>
  
  <!-- Project -->
  <div class="login-wrapper">
    <form action="Login.php" method="post" class="form">
      <h2>Sign In</h2>
      <div class="input-group">
        <input type="text" name="username" id="loginUser" required>
        <label for="username">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" name="login" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
        <br/>
       <a href="Signup.html"  class="forgot-pw">Create new account</a>
    </form>
    <video autoplay muted loop id="bg-video">
      <source src="video/Office Background Video (Extended 6-min).mp4" type="video/mp4">
  </video>
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
 if(!$user){

 print"<Script>
     Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Account not found!',
 
 
})
 </script>";}
 ?>

</body>
</html>