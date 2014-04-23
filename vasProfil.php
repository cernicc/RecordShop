<?php
include_once "scripts/connect_to_mysql.php";
//include_once "scripts/check_if_logged_in.php";

$id = 1; //$_SESSION['id'];
$error = "";
	
$sql = "SELECT *
		FROM uporabnik 
		WHERE id_uporabnik ='".$id."'";
	
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
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
			<?php include "header.php";?>  <!-- Header -->
            <div class="content">
            	<div class="contact">
                	<h3>Vas Profil</h3>
                    <div class="contact-form">
                        <table width="70%">
                            <tr>
                                <td width="40%">Ime: </td>
                                <td><?php echo $row['ime'];?></td>
                            </tr>
                            <tr>
                                <td>Priimek: </td>
                                <td><?php echo $row['priimek'];?></td>
                            </tr>
                            <tr>
                                <td>E-mail: </td>
                                <td><?php echo $row['email'];?></td>
                            </tr>
                            <tr>
                                <td>Naslov: </td>
                                <td><?php echo $row['naslov'];?></td>
                            </tr>
                    	</table>
                	</div>
				</div>
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>