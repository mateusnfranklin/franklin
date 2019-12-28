<?php
//Desabilita a função de mostrar erros
//error_reporting(0);
//ini_set("display_errors", 0 );

error_reporting(E_ALL);
@ini_set('display_errors', '1');

@ini_set('register_globals', '0');
if (version_compare(phpversion(), "4", ">")) {
	if (!extension_loaded('mysqli')) {
		echo ("Nao esta habilitada a dll Mysql");
		exit;
	}
}

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "franklin");

$erros[2005] = "Esse servidor não existe!\n\n Clique no botão voltar e tente novamente!";
$erros[2003] = "Servidor Mysql desligado!\n\n Clique no botão voltar e tente novamente!";
$erros[1045] = "Usuário ou senha inválido!\n\n Clique no botão voltar e tente novamente!";
$erros[1049] = "Banco de dados não encontrado!\n\n Clique no botão voltar e tente novamente!";
$erros[1146] = "Erro de sql a tabela não existe!\n\n Clique no botão voltar e tente novamente!";
$erros[1062] = "Erro! Já existe um usuário cadastrado com o mesmo login de acesso!\n\n Clique no botão voltar e tente novamente!";

function Abre_Conexao()
{
	global $erros;
	$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
	@mysqli_set_charset($conexao, 'UTF8');
	if (mysqli_connect_errno() != 0) {
		echo $erros[mysqli_connect_errno()];
		exit;
	}
	return $conexao;
}
