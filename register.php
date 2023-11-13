<?php include('tools.php'); 
if(isset($_SESSION['idUsuario'])){
	header('Location: panel.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Webgenerator Ulises Gomez Mayorga</title>
</head>
<body>
	<div id="formulario">
		Registrarte es simple
		<form method="POST">
			<input type="email" placeholder="EMAIL" name="email" id="email"><br>
			<input type="password" placeholder="CONTRASEÑA" name="password1" id="password1"><br>
			<input type="password" placeholder="REPITA LA CONTRASEÑA" name="password2" id="password2"><br>
			<input type="submit" name="btnSubmit" value="Registrarse"><br>
			<a href="login.php">Inicie sesión</a>
		</form>
	</div>
</body>
</html>

<?php 
	if(isset($_POST['btnSubmit'])){
		echo(register());
	}
?>
