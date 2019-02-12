
<?php

require_once("../../persistencia/UsuarioDAO.php");
require_once("../dominio/Usuario.php");

$appmundodasvirgulas = new UsuarioDAO();
$Usuario = new Usuario();

$Usuario->pegarDados();
$Usuario->validarDados();



$appmundodasvirgulas->inserir($Usuario);

foreach ($appmundodasvirgulas->selecionarTodos() as $registro) {
	echo "Codigo : ". $registro["cod_Usuario"] . " | Nome : ". $registro["nome"] ." | IDADE : ". $registro["idade"] ." <br /> ";
};



?>
