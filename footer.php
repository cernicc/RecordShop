<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h3>Informacije</h3>
                <ul>
                    <li><a href="onas.html">O nas</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h3>Ponudba</h3>
                <ul>
                    <li><a href="novialbumi.php">Novo</a></li>
                    <li><a href="najljubsi.php">Najljub&#353;i</a></li>
                </ul>
            </div>
            <?php
            echo "<div class='col_1_of_4 span_1_of_4'>";
                echo "<h3>Profil</h3>";
                echo "<ul>";
        
                    if (isset($_SESSION['username'])){
                        echo "<li><a href='vasprofil.php'>Va&#353; profil</a></li>";
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
            <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
                <h3>Pove&#382;ite se z nami</h3>
                <ul>
                    <li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
                    <li><a href="#"><img src="images/twitter.png" title="Twiiter" /></a></li>
                    <li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
                    <li><a href="#"><img src="images/gpluse.png" title="Google+" /></a></li>
                </ul>
                <p>Izdelali smo <a href="#">Rok &#268;erni&#269;</a>, <a href="#">Jaka Plut</a>, <a href="#">Robert Rozina</a></p>
            </div>
        </div>
    </div>
</div>