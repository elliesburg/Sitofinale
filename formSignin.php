<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="formSignin.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yellowtail&display=swap');
    </style>
</head>
<body>
    <div class="signin">
        <img id="logo" src="immagini sito/logo zapaton.jpg">
        <img id="logo" src="immagini sito/amazon.png">
        <p class="titolo1">Zapaton</p>
        <p class="titolo2">Registrati a ZAPATON</p>

        <form action="confermaRegistrazione.php" method="POST"> 
            <div class="dati">
                Nome <input type="text" placeholder="Inserisci il tuo nome" name="nome" required style="width: 60%; padding-left: 20px; margin-left: 93px;"> <br><br>
                Cognome <input type="text" placeholder="Inserisci il tuo cognome" name="cognome" required style="width: 60%; padding-left: 20px; margin-left: 55px;"> <br><br>
                Email <input type="text" placeholder="Inserisci una mail" name="mail" required style="width: 60%; padding-left: 20px; margin-left: 100px;"> <br><br>
                Password <input type="password" placeholder="Inserisci una password" name="password" required style="width: 60%; padding-left: 20px; margin-left: 55px;"> <br><br>
                Data di nascita <input type="date" name="data" required style="width: 56%; padding-left: 20px; padding-right: 20px;"> <br><br>
                PIN carta <input type="password" placeholder="Inserisci un PIN di 4 cifre" name="pin" maxlength="4" minlength="4" required style="width: 60%; padding-left: 20px; margin-left: 60px;"> <br><br>
            </div>
	        <input id="botton" style="margin-left: 30%" type="submit" value="Registrati">
        </form>
    </div>
    
</body>
</html>