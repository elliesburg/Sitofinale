<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="confermaRegistrazione.css">
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yellowtail&display=swap');

    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>  

    <div class="confirm">
        <img id="logo" src="immagini sito/logo zapaton.jpg">
        <img id="logo" src="immagini sito/amazon.png">
        <p class="titolo">Zapaton<p>
        
        <?php
            $username = "root";
            $password = "";
            $database = "sito";
            $server = "localhost";
            
            $conn = new mysqli($server, $username, $password, $database);
            
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "<p class='dati'>Nome: ".$_POST['nome']."</p>";
            echo "<p class='dati'>Cognome: ".$_POST['cognome']."</p>";
            echo "<p class='dati'>Email: ".$_POST['mail']."</p>";
            echo "<p class='dati'>Password: ".$_POST['password']."</p>";
            echo "<p class='dati'>Data di nascita: ".$_POST['data']."</p>";
            echo "<p class='dati'>PIN carta: ".$_POST['pin']."</p>";
            
            // Recupera l'email dal form
            $email = $_POST['mail'];
            $stmt = $conn->prepare("SELECT Email FROM registrazioni WHERE Email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
        
            // Verifica se ci sono risultati
            if($stmt->num_rows > 0){
                echo "Attenzione! La mail esiste già!";
                echo "<br>";
                echo '<button onclick=" goBack()">Torna alla registrazione</button>';
            }
            else{
                echo "Ecco le tue credenziali ";
                echo $_POST['nome'];
                echo "<br><br>";
                $sql = "INSERT INTO registrazioni (Nome, Cognome, Email, Password, Data, PINcarta)
                    VALUES ('" . $_POST["nome"] . "', 
                    '" . $_POST["cognome"] . "', 
                    '" . $_POST["mail"] . "',
                    '" . $_POST["password"] . "',
                    '" . $_POST["data"] . "',
                    '" . $_POST["pin"] . "')";
                echo '<form action="formLogin.php" method="POST">	        
                    <input type="submit" value="Torna al login">
                    </form>';
                
                if($conn->query($sql) !== TRUE) {
                    echo "errore";
                }
            }
            
            $stmt->close();            
            $conn->close();
        ?>
        
    </div> 

    

</body>
</html>