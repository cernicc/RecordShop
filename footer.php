<?php
    echo "<div class='col_1_of_4 span_1_of_4'>";
        echo "<h3>Profil</h3>";
        echo "<ul>";

            if (isset($_SESSION['username'])){
                echo "<li><a href='vasprofil.php'>Vaš profil</a></li>";
                echo "<li><a href='urediprofil.php'>Uredi profil</a></li>";
                echo "<li><a href='odjava.php'>Odjava</a></li>";
            }

            else{
                echo "<li><a href='registriraj.php'>Registracija</a></li>";
                echo "<li><a href='#login-box' class='login-window'>Prijava</a></li>";
            }
        echo "</ul>";
    echo "</div>";
?>