<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->update("professor", "!@#$%");
echo $usuario;
*/

//Deletar um registro
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;

?>