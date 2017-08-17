<?php

	//classe Aluno
	class Aluno{

		private $id;
		private $nome;
    private $logradouro;
    private $cep;
    private $numero;
		private $bairro;
		private $cidade;
		private $estado;
    private $dataNascimento;
    private $dataCadastro;


		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setDataNascimento($dataNascimento){
			$this->dataNascimento = $dataNascimento;
		}

		public function setLogradouro($logradouro){
			$this->logradouro = $logradouro;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro;
		}


		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}

		public function setdataCadastro($dataCadastro){
			$this->dataCadastro = $dataCadastro;
		}
		public function setCep($cep){
			$this->cep = $cep;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getId(){
			return $this->id;
		}

		public function getDataNascimento(){
			return $this->dataNascimento;
		}

		public function getLogradouro(){
			return $this->logradouro;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function getBairro(){
			return $this->bairro;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function getEstado(){
			return $this->estado;
		}

    public function getCep(){
    			return $this->cep;
    }

		public function getdataCadastro(){
			return $this->dataCadastro;
		}


	}

?>
