<meta charset="utf-8">
<?php

// Classe cliente
class Cliente extends Pedido{
	private $nome;
	private $telefone;
	private $cpf;

	//metodos magicos
	public function __construct(){
		
	}

	public function __destruct(){
		echo 'A classe "', __CLASS__, '" foi destruída.<br />';
	}

	public function __toString(){
		
	}

	//metodos especiais
	public function getNome(){
		return $this->nome . "<br/>";
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getTelefone(){
		return $this->telefone . "<br/>";
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getCpf(){
		return $this->cpf . "<br/>";
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
}
// Classe Pedido
class Pedido{
	private $cliente;
	private $itens = array();

	public function __construct(){
		echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
	}

	public function __destruct(){
		echo 'A classe "', __CLASS__, '" foi destruída.<br />';
	}

	public function __toString(){

	}

	public function getCliente(){
		return $this->nome . "<br />";
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}

	public function getItens(){
		return $this->telefone . "<br />";
	}

	public function setItens($itens){
		$this->itens = $itens;
	}

	public function addProduto(Produto $p){
		array_push($innerProduto, $p);
	}

	public function listarProduto(){
		
	}
}
// Class Produto 
class Produto extends Pedido{
	private $codigo;
	private $nome;
	private $valor;

	//metodos magicos
	public function __construct(){
		echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
	}

	public function __destruct(){
		echo 'A classe "', __CLASS__, '" foi destruída.<br />';
	}

	public function __toString(){

	}

	//metodos especiais
	public function getNome(){
		return $this->nome . "<br />";
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCodigo(){
		return $this->codigo . "<br />";
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getValor(){
	    return $this->valor - "<br />";
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function descontoAVista(){
		
	}
}
//objeto cliente
$c = new Cliente();
$c->setNome("cabrito");
echo $c->getNome();
$c->setCpf(1323212312);
//objeto produto
$produto = new Produto();
$produto->setCodigo('1');
$produto->setNome('coco de coelho');
$produto->setValor('80');
//objeto pedido
$p = new Pedido();
$p->addProduto(3);