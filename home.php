<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sito";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	$sql = "SELECT * FROM registrazioni 
			WHERE Email = '" . $_POST["mail"] . "' AND Password = '" . $_POST["password"] . "'";
			
	$result = $conn->query($sql);
	
	if($result->num_rows > 0) {
		$_SESSION["login"] = true;
	}
	else {
		header("location: formLogin.php");
	}
?>

<?php
	if(!(isset($_SESSION["login"]))) {
		header("location: formLogin.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yellowtail&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <script>
        function ricarica(){
            window.location.href = "ricarica.php";
        }
        function logout(){
            window.location.href = "logout.php";
        }
    </script>
</head>
<body>

   <div class="header">
        <div>
            <h2 class="titolo">Zapaton</h2>
            <img id="logo" src="immagini sito/amazon.png">
        </div>
        <h1 class="explore">Scopri gli utensili da giardinaggio di Zapaton!</h1>
        <button onclick="ricarica()">Ricarica credito</button>
        <button onclick="logout()">Logout</button>
        <?php
            $username = "root";
            $password = "";
            $database = "sito";
            $server = "localhost";

            $conn = new mysqli($server, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM registrazioni WHERE Email = '".$_POST["mail"]."'";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo '<button class="fakebutton"> Credito: '.$row["Credito"].'</button>';
            }
            $conn->close();

            $scarpe= 70;
            $zappa= 20;
            $arieggiatore = 40;
            $kit= 25; 
            $badile= 15; 
            $cariola= 1800;
            $trattorino= 3000;
            $tagliaerba= 500;
            $decespugliatore= 170;
            $soffiafoglie= 80;
            $tagliasiepi= 90;
            $motosega= 100;
            $totale=0;
        ?>
    </div>
        <div class="main">
            <div class="shopping">
                <div class="item">
                    <img class="oggetti" src="immagini sito/zappa.jpg">
                    <div class="descrizione">
                        <p><b>Scarpe antinfortunistiche</b>
                        <br>
                        <p>Impossibile lavorare in giardino e svolgere attività pericolose con oggetti pericolosi senza la nostre Zapatons! Materiali di altissima qualità garantiti!</p>
                        <?php echo"$scarpe,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/zappa.jpg">
                    <div class="descrizione">
                        <p><b>Zappa(ton)</b>
                        <br>
                        <p>Il prodotto per eccellenza del nostro marchio. Resistente e comoda è frutto di studi che permettono un'efficienza maggiore: minimo sforzo e massima resa.</p>
                        <?php echo"$zappa,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/arieggiatore.jpg">
                    <div class="descrizione">
                        <p><b>Arieggiatore</b>
                        <br>
                        <p>Prodotto in fibra di carbonio offre massima resistenza anche in terreni accidentati. Disponibile in varie versioni su richiesta.</p>
                        <?php echo"$arieggiatore,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/kit.jpg">
                    <div class="descrizione">
                        <p><b>Kit attrezzi</b>
                        <br>
                        <p>Pensato per aiuole, piccoli giardini e terrazzi offre un'ampia gamma di attrezzi essenziali per la manutenzione del vostro angolo verde. Disponibile anche in formato bimbi per il divertimento dell'intera famiglia.</p>
                        <?php echo"$kit,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/badile.jpg">
                    <div class="descrizione">
                        <p><b>Badile</b>
                        <br>
                        <p>Lo strumento più amato dai nonni. Realizzato con legno di quercia e ferro trattato presenta resistenza all'usura del tempo e della terra.</p>
                        <?php echo"$badile,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/cariola.jpg">
                    <div class="descrizione">
                        <p><b>Cariola elettrica</b>
                        <br>
                        <p>Perchè accontentarsi di una semplice cariola? Con la ZapatonCariola potrai finalmente portare grandi quantità di materiale senza gravare sulla schiena. Ha un autonomia di 12h e una ricarica via cavo. (0%-100% in sole 3h!)</p>
                        <?php echo"$cariola,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/trattorino.png">
                    <div class="descrizione">
                        <p><b>Trattorino tagliaerba</b>
                        <br>
                        <p>Consente di tagliare l'erba in modo comodo, facile e veloce risparmiandoti fatica e mal di schiena. Adatto anche a terreni accidentati grazie alla sua potente trazione posteriore.</p>
                        <?php echo"$trattorino,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/tagliaerba.png">
                    <div class="descrizione">
                        <p><b>Tagliaerba</b>
                        <br>
                        <p>Con impugnatura ergonomica, motore con avvio rapido ed intuitivo permette tramite regolazione di scegliere l'altezza desiderata in un range di 15cm!</p>
                        <?php echo"$tagliaerba,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/decespugliatore.png">
                    <div class="descrizione">
                        <p><b>Decespugliatore</b>
                        <br>
                        <p>Manico allungabile fino a 4m consente di arrivare anche nei luoghi più difficili.</p>
                        <?php echo"$decespugliatore,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/soffiafoglie.jpg">
                    <div class="descrizione">
                        <p><b>Soffiafoglie</b>
                        <br>
                        <p>Il potente motore permette di rimuovere grandi quantità di foglie consentendo di ripulire alla perfezione il tuo giardino. Presenta un motore con avvio facilitato per essere alla portata di tutti.</p>
                        <?php echo"$soffiafoglie,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/tagliasiepi.jpeg">
                    <div class="descrizione">
                        <p><b>Tagliasiepe</b>
                        <br>
                        <p>La lama in acciaio inossidabile e l'impugnatura ergonomica ti consentiranno di avere una siepe sempre "wow"!</p>
                        <?php echo"$tagliasiepi,00€";?>
                    </div>
                </div>
                <div class="item">
                    <img class="oggetti" src="immagini sito/motosega.jpg">
                    <div class="descrizione">
                        <p><b>Motosega</b>
                        <br>
                        <p>Grazie alla sua lama di ottima qualità ti permette di affrontare anche i legni più duri. Ricambio gratuito della catena compreso in garanzia fino a 2 anni dall'acquisto!</p>
                        <?php echo"$motosega,00€";?>
                    </div>
                </div>
            </div>
    
            <div class="form">
                <form action="pagamento.php" method="POST">
                    
                <label>
                    <input type="checkbox" name="values[]" value="70">
                    </label>
                    <br><label>
                    <input type="checkbox" name="values[]" value="20">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="40">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="25">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="15">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="1800">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="3000">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="500">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="170">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="80">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="90">
                    </label>
                    <br>
                    <label>
                    <input type="checkbox" name="values[]" value="100">
                    </label>
                    <br>
                    <input id="botton" type="submit" value="Acquista">
                </form>
            </div>
        </div>
    
    
            
        
                    
    
</body>
</html>