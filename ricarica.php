<?php   
    session_start();
	if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
		header("location: formLogin.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="formLogin.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yellowtail&display=swap');
    </style>

</head>
<body>
    
    <div class="login">
        <img id="logo" src="immagini sito/logo zapaton.jpg">
        <img id="logo" src="immagini sito/amazon.png">
        <p class="titolo1">Zapaton</p>
        <p class="titolo2">Ricarica il credito</p>
        <form action="confermaRicarica.php" method="POST">
            <div class="dati">
                PIN carta <input type="password" placeholder="Inserisci un PIN di 4 cifre" name="pin" maxlength="4" minlength="4" required style="width: 60%; padding-left: 20px; margin-left: 60px;"> <br><br>
                Importo <input type="number" placeholder="Inserisci l'importo" name="importo" style="width: 60%; padding-left: 20px; margin-left: 75px" required> <br><br>	        
            </div>
            <input id="botton" style="margin-left: 30%" type="submit" value="Conferma transazione">  
        </form>
    </div>   
</body>
</html>