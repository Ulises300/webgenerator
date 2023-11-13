<?php include('tools.php'); 
if(!isset($_SESSION['idUsuario'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Document</title>
</head>
<body>
	<h1>Bienvenido a tu panel</h1>
	<a href="logout.php">Cerrar Sesión de <?php echo($_SESSION['idUsuario']); ?></a>
	<?php if($_SESSION['idUsuario'] != 9999){ ?>
	<div class="content">
			
		

		<h2>Generar Web de:</h2>
		<form method="POST">
			<input type="textarea" placeholder="Nombre de la Web" name="name" id="name">
			<input type="submit" id="btnPage" name="btnPage" value="Crear Web">
		</form>
	</div>
</body>
</html>


<?php
	echo(makeLinks());
	if(isset($_POST['btnPage'])){
		$pageName = $_SESSION['idUsuario'] . $_POST['name'];
		if(buscarDominio($pageName) == array()){
			echo(addDominio($pageName));
			echo shell_exec('chmod 757 wix.sh');
			echo shell_exec('./wix.sh '. $pageName);
		}else{
			echo("Dominio ya existente");
		}
	}
}else{
	echo(makeLinksAdmin());

?>






<?php } ?>