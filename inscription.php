<?php
function contact($database){
    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname="5ademni";
    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if(!$conn){
            die('Erreur : ' .mysqli_connect_error());
        }
 
    $req = "INSERT INTO user(UserName,pass,ConfPass,Email) values('".$database['log']."','".$database['p']."','".$database['confp']."','".$database['email']."')";
    
    $res = $conn->query($req);
    return $res;
    

}
?>