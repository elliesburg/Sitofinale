<!DOCTYPE html>
<html>
<body>

<?php
	$username = "root";
	$password = "";
	$database = "log";
	$server = "localhost";
	
	//crea la connessione con sql
	$conn = new mysqli($server, $username, $password, $database);
	
	//controllo della connessione
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	echo "connessione riuscita";
	
	$sql = "INSERT INTO sus (Username, Password)
			VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')"; //la stringa va scomposta, perché altrimenti $_POST diventa una stringa
			
	if($conn->query($sql) === TRUE) {
		echo "record creato";
	}
	else {
		echo "errore";
	}
	
	$conn->close(); //chiude la connessione
?>

</body>
</html>