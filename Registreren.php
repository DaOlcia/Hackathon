<?php

require_once "conn.php"; // Database connectie pagina (Gaby)

// Haal alle code weg van de ingevulde gegevens (Gaby)
$voornaam = strip_tags($_POST["Voornaam"]);
$achternaam = strip_tags($_POST["Achternaam"]);
$Leeftijd = strip_tags($_POST["Leeftijd"]);
$Adres = strip_tags($_POST["Adres"]);
$Huisdier = strip_tags($_POST["Huisdier"]);
$wachtwoord = strip_tags($_POST["Wachtwoord"]);



// Voert alle ingevulde gegevens in de database (Gaby)
$insert_user = $conn->prepare("INSERT INTO gebruiker(Voornaam,Achternaam,Leeftijd,Adres,Huisdier,Wachtwoord) VALUES( :Voornaam, :Achternaam, :Adres, :Huisdier, :Wachtwoord)");


 $insert_user->bindParam(":Voornaam", $Voornaam);

    $insert_user->bindParam(":Achternaam", $Achternaam);

    $insert_user->bindParam(":Leeftijd", $Leeftijd);

    $insert_user->bindParam(":Adres", $Adres);

    $insert_user->bindParam(":Huisdier", $Huisdier);

    $insert_user->bindParam(":Wachtwoord", $hashed_wachtwoord);

   $password_difficulty = ['difficulty' => 11];

    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT, $password_difficulty);

    // Dit zorgt zodat je ingelogd blijft na registeren (Gaby)
    $_SESSION["Voornaam"] = $Voornaam;
    $_SESSION["Achternaam"] = $Achternaam;
    $_SESSION["Leeftijd"] = $Leeftijd; 
    $_SESSION["Adres"] = $Adres;
    $_SESSION["Huisdier"] = $Huisdier;
    //--------------------------------------------------------------------------------------

  // logged_in_user.php bestaat nog niet (Gaby)
 $insert_user->execute(header("IngelogdeGebruiker.php"));

?>