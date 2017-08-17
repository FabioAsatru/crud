<?php

	class Professor{

		private $id;
		private $nome;
		private $dataNascimento;
    private $dataCriacao;
    private $curso;


		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setDataNascimento($dataNascimento){
			$this->dataNascimento = $dataNascimento;
		}

		public function setCurso($curso){
			$this->curso = $curso;
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

		public function getDataNascimento(){
			return $this->dataNascimento;
		}

		public function getCurso(){
			return $this->curso;
		}

		public function getdataCriacao(){
			return $this->dataCriacao;

		}
	}

?>
