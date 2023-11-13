<?php 
	include('tools.php');
	$comando = 'rm -r '.$_GET['id'].'/';
	echo(shell_exec($comando));
	deleteWeb($_GET['id']);
	header('Location: panel.php');

 ?>