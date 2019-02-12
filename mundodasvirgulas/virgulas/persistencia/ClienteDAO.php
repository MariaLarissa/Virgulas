<?php

require_once("DBMySQL.php");
require_once("../../negocio/dominio/Usuario.php");

class UsuarioDAO extends DBMySQL {

	public function inserir($usuario){	
		$this->query("INSERT INTO usuario (nome,idade) VALUES ('".$usuario->nome."','".$usuario->idade."');" );
	}
	
	public function selecionarTodos(){
		return $this->select("SELECT cod_usuario, nome, idade FROM usuarios;");
	}

}

?>
