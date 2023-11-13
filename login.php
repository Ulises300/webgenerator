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
		webgenerator Ulises Gomez Mayorga
		<form method="POST">
			<input type="email" placeholder="EMAIL" name="email" id="email"><br>
			<input type="password" placeholder="CONTRASEÑA" name="password" id="password"><br>
			<input type="submit" name="btnSubmit" value="Ingresar"><br>
			<a href="register.php">Registrarse</a>
		</form>
	</div>
</body>
</html>

<?php 
	if(isset($_POST['btnSubmit'])){
		if($_POST['email'] == 'admin@server.com' && $_POST['password'] == 'serveradmin'){
			$_SESSION['email'] = 'admin';
			$_SESSION['idUsuario'] = 9999;
		}else{
			if(login() == array()){
				echo("Credenciales inválidas");
			}else{
				$_SESSION['email'] = $_POST['email'];
				header('Location: panel.php');
			}
		}

	}
?>
