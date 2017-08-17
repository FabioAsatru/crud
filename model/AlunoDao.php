<?php


	class AlunoDao{

		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}

		public function cadastrar(Aluno $aluno){

			$query = "INSERT INTO aluno(nome,data_nascimento,cep,logradouro,numero,bairro,cidade,estado,data_criacao)
			VALUES(
				 '{$aluno->getNome()}'
				,'{$aluno->getDataNascimento()}'
				,'{$aluno->getCep()}'
				,'{$aluno->getLogradouro()}'
				,'{$aluno->getNumero()}'
				,'{$aluno->getBairro()}'
				,'{$aluno->getCidade()}'
				,'{$aluno->getEstado()}'
				,'{$aluno->getdataCadastro()}'
			)";

				return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$alunos = array();

			$query = "SELECT * FROM aluno";

			$result = mysqli_query($this->connection,$query);

			while($aluno_array = mysqli_fetch_array($result)){
				array_push($alunos, $aluno_array);
			}

			return $alunos;


		}

		public function selecionar($id){
			$query = "SELECT * FROM aluno WHERE id_aluno= '{$id}' ";

			$result = mysqli_query($this->connection,$query);

			$aluno = mysqli_fetch_assoc($result);

			$data = new DateTime($aluno['data_nascimento']);

			$aluno['data_nascimento'] = $data->format("d M, Y");

			return $aluno;
		}

		public function edita(Aluno $aluno){

			$query = "UPDATE aluno SET nome ='{$aluno->getNome()}',data_nascimento = '{$aluno->getDataNascimento()}',
				cep = '{$aluno->getCep()}', logradouro = '{$aluno->getLogradouro()}', numero = '{$aluno->getNumero()}',
				bairro = '{$aluno->getBairro()}', cidade = '{$aluno->getCidade()}', estado = '{$aluno->getEstado()}' WHERE id_aluno = '{$aluno->getId()}' ";

			return mysqli_query($this->connection,$query);
		}

		public function excluir($id){
			$query = "DELETE FROM aluno WHERE id_aluno = '{$id}' ";

			return mysqli_query($this->connection,$query);
		}

	}


?>
