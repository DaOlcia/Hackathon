<?php 
require_once "Conn.php";
session_start (); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/ecd9dddd0d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registreren</title>
    <link rel="stylesheet" href="NavCss.css"> 
    <link rel="stylesheet" href="Main.css">
</head>
<body>
<nav>
    <ul> <li><a href="Hoofdpagina.php">Hoofdpagina</a></li> </ul> 
        <div class="Dropdown">
            <button class="NavButton1"><i class="fa-solid fa-star"></i>Registreer</button>
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

    <h1> Registratie formulier </h1> 
    <p> Vul de formulier hieronder in om te registeren. </p>
    <form class="formulier" action="" method="post"> 
        <label for="Voornaam">Voornaam</label>
        <input type="text" id="Voornaam" name="Voornaam" required>

        <label for="Achternaam">Achternaam</label>
        <input type="text" id="Achternaam" name="Achternaam" required>

        <label for="Leeftijd">Leeftijd</label>
        <input type="range" id="leeftijdsSlider" min="-100" max="101" value="0" oninput="checkLeeftijd(this.value)">
        <span id="leeftijdsWaarde"></span>
        <div id="leeftijdsMelding"></div>
        
        <label for="Adres">Adres</label>
        <input type="text" id="Adres" name="Adres" required>

        <label for="Huisdier?">Huisdier?</label>
            <select id="Huisdier?" name="Huisdier?">
            <option value="0">0</option>
            <option value="1-2">1-2</option>
            <option value="3+">3+</option>
            </select>

        <label for="Wachtwoord">Wachtwoord</label>
        <input type="password" id="Wachtwoord" name="Wachtwoord" required>

        <input type="submit" name="submit" value="Registreren">

    </form> 
    <script>
        function checkLeeftijd(leeftijd) {
        var meldingElement = document.getElementById("leeftijdsMelding");
        var leeftijdsWaardeElement = document.getElementById("leeftijdsWaarde");

        // Toon de huidige leeftijdswaarde naast de schuifregelaar
        leeftijdsWaardeElement.textContent = leeftijd;

            if (leeftijd < 18) {
                meldingElement.textContent = "Jonger dan 18? Damn kind";
            } else if (leeftijd > 30 && leeftijd <= 60) {
                meldingElement.textContent = "30+? Je zou maar zo oud zijn";
            } else if (leeftijd > 60 && leeftijd <= 100){
                meldingElement.textContent = "60+? Fakka Omaatje ga van het internet af!!";
            }  else if (leeftijd > 100) {
                meldingElement.innerHTML = '<a href="https://www.youtube.com/watch?v=F6Fh5NGXDPw&ab_channel=TYY">Kijk eens hier</a>';
                meldingElement.style.color = "white";
            }
        }
    </script>
    <footer>
    <p>  </p>
</footer>
</body>
</html>

