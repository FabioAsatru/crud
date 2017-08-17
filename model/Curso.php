<?php


	class Curso{

		private $id;
		private $nome;
		private $dataCriacao;

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setdataCriacao($dataCriacao){
			$this->dataCriacao = $dataCriacao;
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getdataCriacao(){
			return $this->dataCriacao;
		}

	}


?>
