<?php
	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Max Saccomani");
	$cad->setEmail("maximo.saccomani@funepe.edu.br");
	$cad->setSenha("123456");

	$cad->registrarVenda();
?>