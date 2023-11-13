<?php
include('conexion.php');
session_start();


function login(){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$ssql = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `password` = '$pass'";
	$response = query($ssql);
	$resultado= $response->fetch_all(MYSQLI_ASSOC);
	if (isset($resultado[0])) {
		$_SESSION['idUsuario'] = $resultado[0]['idUsuario'];
	}
	return ($resultado);
}

function register(){
	$email = $_POST['email'];
	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
	$ssql = "SELECT * FROM `usuarios`";
	$response = query($ssql);
	$usuarios = $response->fetch_all(MYSQLI_ASSOC);
	foreach ($usuarios as $key => $usuario) {
		if($usuario['email']==$email){
			return "Email ya Registrado";
		}
	}
	if($pass1 != $pass2){
		return "Contraseñas Inválidas";
	}
	$sql= "INSERT INTO `usuarios`(`email`, `password`) VALUES ('$email','$pass1')";
	$response = query($sql);
	return header("Location: login.php");
}


function buscarDominio($dominio){
	$ssql = "SELECT * FROM `webs` WHERE `dominio` = '$dominio'";
	$response = query($ssql);
	$resultado= $response->fetch_all(MYSQLI_ASSOC);
	return $resultado;
}

function addDominio($dominio){
	$id = $_SESSION['idUsuario'];
	$sql= "INSERT INTO `webs`(`idUsuario`, `dominio`) VALUES ('$id','$dominio')";
	$response = query($sql);
	if($response){
		echo("Dominio agregado de manera exitosa");
		header('Location: panel.php');
	}else{
		return "Error al registrar el dominio";
	}
}

function makeLinks(){
	$tarjeta = '';
	$id = $_SESSION['idUsuario'];
	$ssql = "SELECT * FROM `webs` WHERE `idUsuario` = '$id'";
	$response = query($ssql);
	$resultado= $response->fetch_all(MYSQLI_ASSOC);
	if(isset($resultado[0])){
		foreach ($resultado as $key => $usuario) {
			echo("<div class='linea'><a href='".$usuario['dominio']."'>Ingresar a ". $usuario['dominio'] ."</a><a href=eliminar.php?id=".$usuario['dominio'].">Eliminar sitio </a><a href=comprimir.php?id=".$usuario['dominio'].">Descargar Sitio</a></div>");
		}
	}
}

function makeLinksAdmin(){
	$tarjeta = '';
	$id = $_SESSION['idUsuario'];
	$ssql = "SELECT * FROM `webs`";
	$response = query($ssql);
	$resultado= $response->fetch_all(MYSQLI_ASSOC);
	if(isset($resultado[0])){
		foreach ($resultado as $key => $usuario) {
			echo("<div class='linea'><a href='".$usuario['dominio']."'>Ingresar a ". $usuario['dominio'] ."</a></div>");
		}
	}
}

function deleteWeb($id){
	$ssql = "DELETE FROM `webs` WHERE `dominio` = '$id'";
	$response = query($ssql);
}
?>