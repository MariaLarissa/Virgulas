
<?php 

class Usuario {

	public $codigo;
	public $nome;
	public $idade;
	
	public function __construct($nome = null, $idade = null, $codigo = null){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->codigo = $codigo;
	}
		
	public function pegarDados(){
		
		$this->nome = $_GET["nome"];
		$this->idade = $_GET["idade"];
	}
	
	public function validarDados(){
	}

}

?>
