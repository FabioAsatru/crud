<?php

	class CursoDao{

		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}


		public function cadastrar(Curso $curso){
			$query = "INSERT INTO curso(nome,data_criacao) VALUES('{$curso->getNome()}','{$curso->getdataCriacao()}')";

			return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$cursos = array();

			$query = "SELECT * FROM curso";

			$result = mysqli_query($this->connection,$query);

			while($curso_array = mysqli_fetch_assoc($result)){
				array_push($cursos, $curso_array);
			}

			return $cursos;

		}

		public function excluir($id){
			$query = "DELETE FROM curso WHERE id_curso = '{$id}' ";

			return mysqli_query($this->connection,$query);
		}


		public function selecionar($id_curso){
			$query = "SELECT * FROM curso WHERE id_curso = '{$id_curso}' ";

			$result = mysqli_query($this->connection,$query);

			return mysqli_fetch_assoc($result);

		}

		public function editar(Curso $curso){
			$query = "UPDATE curso SET nome= '{$curso->getNome()}' WHERE id_curso = '{$curso->getId()}' ";

			return mysqli_query($this->connection,$query);
		}


	}

?>
