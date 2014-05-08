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
			<?php include "header.php";?>  <!-- Header -->
            <div class="content">
                <div class="contact">
                    <div class="section group">				
            			<div class="col span_1_of_3">
                			<div class="contact_info">
                            <h3>Najdete nas lahko tukaj</h3>
                                <div class="map">
                                    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en-US&amp;geocode=&amp;q=Fakulteta+za+ra%C4%8Dunalni%C5%A1tvo+in+informatiko,+Ljubljana,+Slovenia&amp;aq=0&amp;oq=Fakulteta+za+ra&amp;sll=46.044839,14.489293&amp;sspn=0.013866,0.033023&amp;gl=US&amp;ie=UTF8&amp;hq=Fakulteta+za+ra%C4%8Dunalni%C5%A1tvo+in+informatiko,&amp;hnear=Ljubljana,+Slovenia&amp;t=m&amp;ll=46.044839,14.489293&amp;spn=0.025546,0.04131&amp;output=embed"></iframe>
                                </div>
                        	</div>
                            <div class="company_address">
                                    <h3>Infromacije o podjetju :</h3>
                                            <p>500 Lorem Ipsum Dolor Sit,</p>
                                            <p>22-56-2-9 Sit Amet, Lorem,</p>
                                            <p>SLO</p>
                                    <p>Telefon: 040 666 666</p>
                                    <p>Email: <span>info@recordshop.com</span></p>
                            </div>
						</div>				
                        <div class="col span_2_of_3">
                        	<div class="contact-form">
                            	<h3>Kontaktirajte nas:</h3>
                                <form action="mailto:info@example.com" enctype="text/plain" method="post">
                                	<div>
                                        <span><label>IME</label></span>
                                        <span><input type="text" value="" name="Ime"></span>
                                    </div>
                                    <div>
                                        <span><label>E-MAIL</label></span>
                                        <span><input type="text" value="" name="Email"></span>
                                    </div>
                                    <div>
                                        <span><label>MOBITEL</label></span>
                                        <span><input type="text" value="" name="Mobitel"></span>
                                    </div>
                                    <div>
                                        <span><label>ZADEVA</label></span>
                                        <span><textarea> </textarea></span>
                                    </div>
                                   	<div>
                                        <span><input type="submit" value="Pošlji"></span>
                                  	</div>
                                </form>
                            </div>
                        </div>				
					</div>
				</div>
        	</div>
        	<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>