<?php
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
     
     
       $user=true;
       

   $req="select * from user where UserName='$username'and pass='$Password'";
   
       $result=$conn-> query($req);
$user=$result->fetch();
    return $user;


  
   }

  
  }
  function logout(){
    
    session_start();
    session_unset();
    session_destroy();
    header('location:Login.php');
  
  }
   ?>