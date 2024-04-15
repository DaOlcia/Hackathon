<?php 

$username = "root";
$password = "";

try {
    $conn = new PDO ("mysql:host=localhost;dbname=Hackathon",$username,$password);
}
catch (PDOException $error){
    echo $error->getMessage(); 
}

?>