<?php

	class ProfessorDao{


		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}


		public function cadastrar(Professor $professor){
			$query = "INSERT INTO professor(nome,data_nascimento,id_curso,data_criacao)VALUES('{$professor->getNome()}',
				'{$professor->getDataNascimento()}','{$professor->getCurso()}','{$professor->getdataCriacao()}')";

			return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$professores = array();

			$query = "SELECT * FROM professor";

			$result = mysqli_query($this->connection,$query);

			while($professor_array = mysqli_fetch_assoc($result)){
				array_push($professores, $professor_array);
			}

			return $professores;

		}

		public function excluir($id){

			$query = "DELETE FROM professor WHERE id_professor = '{$id}' ";

			return mysqli_query($this->connection,$query);

		}

		public function selecionar($id){

			$query = "SELECT * FROM professor WHERE id_professor = '{$id}' ";

			$result = mysqli_query($this->connection,$query);

			$professor = mysqli_fetch_assoc($result);

			$data = new DateTime($professor['data_nascimento']);

			$professor['data_nascimento'] = $data->format("d M, Y");

			return $professor;

		}

		public function edita(Professor $professor){
			$query = "UPDATE professor SET nome = '{$professor->getNome()}',data_nascimento = '{$professor->getDataNascimento()}', id_curso = '{$professor->getCurso()}'  WHERE id_professor = '{$professor->getId()}' ";

			return mysqli_query($this->connection,$query);
		}

	}


?>
