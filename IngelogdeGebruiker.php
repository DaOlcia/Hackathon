<?php 
require_once "Conn.php";
session_start (); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="NavCss.css"> 
    <link rel="stylesheet" href="Main.css">
</head>
<body>
    <nav>
    <ul> <i class="fa-solid fa-star"></i><li><a href="Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
        <div class="Dropdown">
            <button class="NavButton1">Registreer</button>
                 <div class="SubDropdown1">
                     <button class="NavButton2">Bijna</button>
                        <div class="SubDropdown2">
                            <button class="NavButton3">Nog 1</button>
                                <div class="SubDropdown3">
                                    <button class="NavButton4"> Haha lozer</button>
                                         <ul class="SubDropdown4"> 
                                              <li> <a href="FormulierRegistratie.php"> Klik hier</a> </i>
                                          </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </div>

                  <div class="Dropdown">
            <button class="NavButton1">Log in</button>
                 <div class="SubDropdown1">
                     <button class="NavButton2">Inloggen??</button>
                        <div class="SubDropdown2">
                            <button class="NavButton3">Waarom?</button>
                                <div class="SubDropdown3">
                                    <button class="NavButton4"> Kan toch niet</button>
                                         <ul class="SubDropdown4"> 
                                              <li> <a href="FormulierRegistratie.php"> Registreer Sukkeltje</a> </i>
                                          </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </div>
    </nav>

        
</body>
</html>