<?php
require_once("valida_session.php");
	     
$codigo = $_SESSION['cod_usu'];
$senha = md5($_POST["senha"]);

if ($_SESSION['perfil'] == 1) {
	require_once ("bd/bd_usuario.php");
	$dados = editarSenhaUsuario($codigo,$senha);
}

if ($dados == 1){
	$_SESSION['texto_sucesso'] = 'A senha foi alterada no sistema.';
	header ("Location:editar_senha.php");
}else{
	$_SESSION['texto_erro'] = 'A senha não foi alterada no sistema!';
	header ("Location:editar_senha.php");
}


		
?>