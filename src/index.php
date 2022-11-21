<?php

?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Zaloguj się</title>
	<link rel="stylesheet" href="styles.css"></link>
</head>

<body>
    <div id="global_header">
        <div id="menu">
            <img style="height: 100px; float: left;" src="../img/logo.png" alt="Logo"/>
            <span style="position: absolute; padding-top: 65px;">Filip Entertainment</span>
        </div>
    </div>
	<h1 style="text-shadow: 2px 2px red;" >Zaloguj się</h1>
	<div id="page_content">
	    <div id="form">
             <input type="text" id="nick" placeholder="Wpisz swój nick" class="normal_input" ></input>
             <input type="password" id="haslo" placeholder="Wpisz swoje hasło" class="normal_input" ></input>
             </br>
             <label>
                <input type="checkbox" value="akceptuj">Zaakceptuj regulamin strony!<br>
             </label>
             <input class="confirm_button" type="submit" value="Zaloguj się">
         </div>
         <img class="qr_code" src="../img/qr-code.png" alt="QR code"/>
	</div>
	<div id="footer">

    </div>
</body>
</html>