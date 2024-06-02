<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se l'array 'values' è stato inviato
    if (isset($_POST['values']) && is_array($_POST['values'])) {
        // Inizializza la somma a zero
        $sum = 0;

        // Somma i valori delle checkbox selezionate
        foreach ($_POST['values'] as $value) {
            $sum += (int)$value; // Converte il valore in un intero e lo somma
        }

        // Redirige alla pagina di risultato con la somma come parametro GET
        echo $sum;
        session_start();
        $_SESSION["sum"]=$sum;
    } else {
        // Se nessuna checkbox è selezionata, redirige con sum=0
        header("Location: home.php?sum=0");
        exit();
    }
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
        <p class="titolo2">Inserisci il PIN della carta per effettuare il pagamento</p>
        <form action="confermaPagamento.php" method="POST">
            <div class="dati">
                PIN carta <input type="password" placeholder="Inserisci un PIN di 4 cifre" name="pin" maxlength="4" minlength="4" required style="width: 60%; padding-left: 20px; margin-left: 60px;"> <br><br>
            </div>
            <input id="botton" style="margin-left: 30%" type="submit" value="Conferma transazione">  
        </form>
    </div>   
</body>
</html>