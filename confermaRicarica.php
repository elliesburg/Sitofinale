<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sito";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	if(isset($_SESSION["login"])){
        $sql = "SELECT * FROM registrazioni 
        WHERE PINcarta = '" . $_POST["pin"] . "'";
        
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $_SESSION["ricarica"] = true;
            $_SESSION["login"]=true;
        }
        else{
            header("location: ricarica.php");
        }
    }
    else{
        header("location: formLogin.php");
    }

    $sql = "UPDATE registrazioni SET Credito=(SELECT Credito WHERE PINcarta = " . $_POST['pin'] . ")+" . $_POST['importo'] . " WHERE PINcarta = " . $_POST['pin']." ";
    if($conn->query($sql) !== TRUE) {
        echo "errore";
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
            $sql = "SELECT Credito FROM registrazioni WHERE PINcarta = '".$_POST["pin"]."'";
                $result = $conn->query($sql);

            echo "Grazie per la tua ricarica ";
            echo "<br><br>";
            echo "Il tuo credito è: ";
            while($row = $result->fetch_assoc()) {
                echo $row["Credito"];
            }

            $conn->close();
            
        ?>
        
        <form action="home.php" method="POST">
            <input id="botton" style="margin-left: 30%" type="submit" value="Torna alla home">  
        </form>

        </div> 
    </body>
</html>