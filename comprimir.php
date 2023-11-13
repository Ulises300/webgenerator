<?php 
	$nombre = $_GET['id'];
    $archivo_zip='zip -r '.$nombre.".zip ".$nombre."/";
    echo(shell_exec($archivo_zip));
	header('Location: '.$nombre.'.zip');
 ?>