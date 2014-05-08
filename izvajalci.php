<?php
include "scripts/connect_to_mysql.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Music Store</title>
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
</head>
<body>
<div class="wrap"> <!---start-wrap--->
    <?php include "header.php";?> <!-- Header -->
    <div class="content">
        <div class="Cartires"> <!--start-cartires-page---->
            <h5><span>Izvajalci</span></h5>
            <div class="cartires-grids">

                <?php
                    $sql = "SELECT izvajalec.id_izvajalec, izvajalec.ime, album.opis, album.cena, album.image, album.id_izvajalec, album.naslov
                            FROM izvajalec
                            INNER JOIN album
                            ON izvajalec.id_izvajalec=album.id_izvajalec
                            ORDER BY izvajalec.ime
                            LIMIT 10;";

                    $result = mysql_query($sql);
                    //$result1 = mysql_query($sql1);
                    if (!$result) {
                        echo "Could not successfully run query ($sql) from DB: " . mysql_error();
                        exit;
                    }

                    if (mysql_num_rows($result) == 0) {
                        echo "No rows found, nothing to print so am exiting";
                        exit;
                    }

                    while ($row = mysql_fetch_assoc($result) ){
                        echo '<div class="cartire-grid">';
                            echo '<div class="cartire-grid-img">';
                                echo '<img src="album_images/'.$row["image"].'" title="tries" />';
                            echo '</div>';
                        echo '<div class="cartire-grid-info">';
                            echo '<ul>';
                                echo '<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>';
                            echo '</ul>';
                            echo '<h4>'.$row["ime"].'</h4>';
                            echo '<h2>'.$row["naslov"].'</h2s>';
                            echo '<p>'.$row["opis"].'</p>';
                        echo '</div>';
                        echo '<div class="cartire-grid-cartinfo">';
                            echo '<h4>Cena!</h4>';
                            echo '<span>'.$row["cena"].' €'.'</span><br><br>';
                            echo '<a href="album.php">Dodaj v košarico</a><br />';
                            echo '<a href="album.php">Več info</a>';
                        echo '</div>';
                        echo '<div class="clear"> </div>';
                        echo '</div><br/>';
                    }
                ?>


            </div>
        </div>
        <!--End-cartires-page---->
    </div>
    <div class="clear"> </div>
    <?php include "footer.php";?>  <!-- Footer -->
</div> <!---End-wrap--->
</body>
</html>