<?php

require_once("../model/Aluno.php");
require_once("../model/AlunoDao.php");
require_once("../model/ConnectionFactory.php");


  global $alunos;
  global $aluno;
  global $alunoDao;

  //$alunos = find_all('aluno');

  $connection = new ConnectionFactory();
  $alunoDao = new AlunoDao($connection->getConnection());
  $alunos = $alunoDao->listar();

  function add(){
    if (!empty($_POST['nome'])) {

      $connection = new ConnectionFactory();
      $alunoDao = new AlunoDao($connection->getConnection());

      $aluno = new Aluno();
      $date = new DateTime();

      $aluno->setNome($_POST['nome']);
      $aluno->setDataNascimento($_POST['data_nascimento']);
      $aluno->setdataCadastro($date->format("Y-m-d H:i:s"));
      $aluno->setLogradouro($_POST['logradouro']);
      $aluno->setNumero($_POST['numero']);
      $aluno->setBairro($_POST['bairro']);
      $aluno->setCidade($_POST['cidade']);
      $aluno->setEstado($_POST['estado']);
      $aluno->setCep($_POST['cep']);

      if($alunoDao->cadastrar($aluno)){
      	header('location: alunos.php');
      }else{
      	echo "error";
      }

      //echo $nome;
    }

  }

  function delete($id = null) {

    $factory = new ConnectionFactory();
    $alunoDao = new AlunoDao($factory->getConnection());

    if($alunoDao->excluir($id)){
    	//echo "success";
      header('location: alunos.php');
    }else{
    	echo "error";
    }

  }

  function edit(){
    $connection = new ConnectionFactory();
    $alunoDao = new AlunoDao($connection->getConnection());

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      if (isset($_POST['nome'])) {

        $aluno = new Aluno();
        //$date = new DateTime();

        $aluno->setId($id);
        $aluno->setNome($_POST['nome']);
        $aluno->setDataNascimento($_POST['data_nascimento']);
        //$aluno->setdataCadastro($date->format("Y-m-d H:i:s"));
        $aluno->setLogradouro($_POST['logradouro']);
        $aluno->setNumero($_POST['numero']);
        $aluno->setBairro($_POST['bairro']);
        $aluno->setCidade($_POST['cidade']);
        $aluno->setEstado($_POST['estado']);
        $aluno->setCep($_POST['cep']);

        if($alunoDao->edita($aluno)){
            header('location: alunos.php');
        }else{
            echo "error de atualizacao";
        }

      } else {
        global $aluno;
        $aluno = $alunoDao->selecionar($id);
      }
    } else {
      header('location: index.php');
    }


  }















?>
