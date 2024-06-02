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
        <p class="titolo2">Accedi a ZAPATON</p>
        <form action="home.php" method="POST">
            <div class="dati">
                Email <input type="text" placeholder="Inserisci la tua mail" name="mail" style="width: 70%; margin-left: 47px; padding-left: 20px;" required> <br><br>
                Password <input type="password" placeholder="Inserisci la tua password" name="password" style="width: 70%; padding-left: 20px;" required> <br><br>	        
            </div>
            <input id="botton" style="margin-left: 22%" type="submit" value="Accedi">  
        </form>


        <div class="registratiOra">
            <p>Non sei registrato?</p>
            <a href="formSignin.php">Registrati ora su ZAPATON</a>
        </div>
    </div>   
</body>
</html>