<?php


	class NotaDao{

		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}

		public function cadastrar(Nota $nota){
			$query = "INSERT INTO notas(id_curso,id_aluno,id_professor,nota1,nota2,nota3,nota4,data_criacao)
				VALUES('{$nota->getCurso()}','{$nota->getAluno()}','{$nota->getProfessor()}','{$nota->getNota1()}',
				'{$nota->getNota2()}','{$nota->getNota3()}','{$nota->getNota4()}','{$nota->getdataCriacao()}')";

			return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$notas = array();

			$query = "SELECT *FROM notas";

			$result = mysqli_query($this->connection,$query);

			while($nota_array = mysqli_fetch_assoc($result)){
				array_push($notas, $nota_array);
			}

			return $notas;

		}

		public function excluir($id){
			$query = "DELETE FROM notas WHERE id_notas = '{$id}' ";

			return mysqli_query($this->connection,$query);
		}

		public function selecionar($id){
			$query = "SELECT * FROM notas WHERE id_notas = '{$id}' ";

			$result = mysqli_query($this->connection,$query);

			return mysqli_fetch_assoc($result);

		}

		public function editar(Nota $nota){
			$query = "UPDATE notas SET nota1 = '{$nota->getNota1()}', nota2 = '{$nota->getNota2()}', nota3 = '{$nota->getNota3()}',
				nota4 = '{$nota->getNota4()}' WHERE id_notas = '{$nota->getId()}' ";

			return mysqli_query($this->connection,$query);
		}

	}


?>
