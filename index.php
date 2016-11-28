<?php
include("connessione.php");
$connessione = new Connection(
	"127.0.0.1",
	"eroi",
	"root",
	""
);
$query = new Query($connessione);

if(isset($_POST["nome"]) && $_POST["nome"] != "")
	$query->query("INSERT INTO eroi (nome) VALUES ('$_POST[nome]')");

$eroi = $query->query("SELECT * FROM eroi");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ELENCO EROI</title>
	</head>
	<body>
			<h1>ELENCO EROI</h1>
			<form action="index.php" method="POST">
				<input type="text" name="nome" value="" placeholder="nome eroe">
				<input type="submit" value="Inserisci">
			</form>
			<ul>
				<?php
					foreach($eroi as $eroe)
						echo "<li>$eroe[nome]</li>";
				?>
			</ul>
	</body>
</html>
