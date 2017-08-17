<?php

	class Nota{

		private $id;
		private $curso;
		private $aluno;
		private $professor;
		private $dataCriacao;
		private $nota1;
		private $nota2;
		private $nota3;
		private $nota4;


		public function setId($id){
			$this->id = $id;
		}

		public function setCurso($curso){
			$this->curso = $curso;
		}

		public function setAluno($aluno){
			$this->aluno = $aluno;
		}

		public function setProfessor($professor){
			$this->professor = $professor;
		}

		public function setdataCriacao($dataCriacao){
			$this->dataCriacao = $dataCriacao;
		}


		public function setNota1($nota1){
			$this->nota1 = $nota1;
		}

		public function setNota2($nota2){
			$this->nota2 = $nota2;
		}

		public function setNota3($nota3){
			$this->nota3 = $nota3;
		}

		public function setNota4($nota4){
			$this->nota4 = $nota4;
		}


		public function getId(){
			return $this->id;
		}

		public function getCurso(){
			return $this->curso;
		}

		public function getAluno(){
			return $this->aluno;
		}

		public function getNota1(){
			return $this->nota1;
		}

		public function getNota2(){
			return $this->nota2;
		}

		public function getNota3(){
			return $this->nota3;
		}

		public function getNota4(){
			return $this->nota4;
		}

		public function getProfessor(){
			return $this->professor;
		}

		public function getdataCriacao(){
			return $this->dataCriacao;
		}
	}


?>
