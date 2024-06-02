<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sito";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
    $sql = "SELECT Credito FROM registrazioni WHERE PINcarta = '".$_POST["pin"]."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row["Credito"]>=$_SESSION["sum"]){
            $sql = "UPDATE registrazioni SET Credito=(SELECT Credito WHERE PINcarta = " . $_POST['pin'] . ")-" . $_SESSION['sum'] . " WHERE PINcarta = " . $_POST['pin']." ";
            if($conn->query($sql) !== TRUE) {
                echo "errore";
            }
            $pagamento=true;
        }
        else{
            $pagamento=false;
        }
    }
    else{
        header("location: pagamento.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="confermaRegistrazione.css">
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yellowtail&display=swap');

    </style>

</head>

<body>  

    <div class="confirm">
        <img id="logo" src="immagini sito/logo zapaton.jpg">
        <img id="logo" src="immagini sito/amazon.png">
        <p class="titolo">Zapaton<p>
        
        <?php
            if($pagamento==false){
                echo "Attenzione! Credito insufficiente.";
                echo "<br><br>";
            }
            else{
                echo "Transazione effettuata con successo! Grazie!";
                echo "<br><br>";
            }
            $conn->close();
        ?>
        
        <form action="home.php" method="POST">
            <input id="botton" style="margin-left: 30%" type="submit" value="Torna alla home">  
        </form>

        </div> 
    </body>
</html>