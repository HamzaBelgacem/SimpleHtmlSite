<?php
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname='5ademni';

            try{
                $conn = new PDO("mysql:host=127.0.0.1;port=3308;dbname=3gf2", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              //  echo 'Connexion réussie';   
            }
            /* si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
            ?>