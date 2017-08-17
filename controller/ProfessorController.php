<?php

require_once("../model/Professor.php");
require_once("../model/ProfessorDao.php");
require_once("../model/ConnectionFactory.php");
require_once("../model/CursoDao.php");
require_once("../model/Curso.php");


//index

$connection = new ConnectionFactory();
$ProfessorDao = new ProfessorDao($connection->getConnection());
$professores = $ProfessorDao->listar();

$CursoDao = new CursoDao($connection->getConnection());
$cursos = $CursoDao->listar();

function findCurso($id){

    $connection = new ConnectionFactory();
    $CursoDao = new CursoDao($connection->getConnection());
    $curso = $CursoDao->selecionar($id);
    return $curso['nome'];
}

function delete($id = null) {

  $factory = new ConnectionFactory();
  $ProfessorDao = new ProfessorDao($factory->getConnection());

  if($ProfessorDao->excluir($id)){
    //echo "success";
    header('location: professores.php');
  }else{
    echo "error";
  }

}

function edit(){

  $factory = new ConnectionFactory();
  $ProfessorDao = new ProfessorDao($factory->getConnection());


  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['nome'])) {

      $professor = new Professor();
      $professor->setId($id);
      $professor->setNome($_POST['nome']);
      $professor->setCurso($_POST['id_curso']);
      $professor->setDataNascimento($_POST['data_nascimento']);


      if($ProfessorDao->edita($professor)){
          header('location: professores.php');
      }else{
          echo "error de atualizacao";
      }

    } else {
      global $professor;
      $professor = $ProfessorDao->selecionar($id);
    }
  } else {
    header('location: index.php');
  }
}


function add(){
  if (!empty($_POST['nome'])) {

    $connection = new ConnectionFactory();
    $ProfessorDao = new ProfessorDao($connection->getConnection());

    $professor = new Professor();
    $date = new DateTime();

    $professor->setNome($_POST['nome']);
    $professor->setDataNascimento($_POST['data_nascimento']);
    $professor->setdataCriacao($date->format("Y-m-d H:i:s"));
    $professor->setCurso($_POST['id_curso']);

    if($ProfessorDao->cadastrar($professor)){
      header('location: professores.php');
    }else{
      echo "error";
    }

    //echo $nome;
  }

}




?>
