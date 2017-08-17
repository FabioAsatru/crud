<?php

require_once("../model/Professor.php");
require_once("../model/ProfessorDao.php");
require_once("../model/Aluno.php");
require_once("../model/AlunoDao.php");

require_once("../model/ConnectionFactory.php");
require_once("../model/CursoDao.php");
require_once("../model/Curso.php");
require_once("../model/Nota.php");
require_once("../model/NotaDao.php");


//index

$connection = new ConnectionFactory();
$ProfessorDao = new ProfessorDao($connection->getConnection());
$professores = $ProfessorDao->listar();
$CursoDao = new CursoDao($connection->getConnection());
$cursos = $CursoDao->listar();
$NotaDao = new NotaDao($connection->getConnection());
$notas = $NotaDao->listar();
$AlunoDao = new AlunoDao($connection->getConnection());
$alunos = $AlunoDao->listar();





function findCurso($id){


    $connection = new ConnectionFactory();
    $CursoDao = new CursoDao($connection->getConnection());
    $curso = new Curso();
    $curso = $CursoDao->selecionar($id);
    return $curso['nome'];

}
function findProfessor($id){

    $connection = new ConnectionFactory();
    $ProfessorDao = new ProfessorDao($connection->getConnection());
    $professor = $ProfessorDao->selecionar($id);
    return $professor['nome'];
}
function findAluno($id){

    $connection = new ConnectionFactory();
    $AlunoDao = new AlunoDao($connection->getConnection());
    $aluno = $AlunoDao->selecionar($id);
    return $aluno['nome'];
}


function delete($id = null) {

  $factory = new ConnectionFactory();
  $NotaDao = new NotaDao($factory->getConnection());

  if($NotaDao->excluir($id)){
    //echo "success";
    header('location: notas.php');
  }else{
    echo "error";
  }

}

function edit(){

  $factory = new ConnectionFactory();
  $NotaDao = new NotaDao($factory->getConnection());


  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['nota1'])) {

      $nota = new Nota();
      $nota->setId($id);
      $nota->setNota1($_POST['nota1']);
      $nota->setNota2($_POST['nota2']);
      $nota->setNota3($_POST['nota3']);
      $nota->setNota4($_POST['nota4']);


      if($NotaDao->editar($nota)){
          header('location: notas.php');
      }else{
          echo "error de atualizacao";
      }

    } else {
      global $nota;
      $nota = $NotaDao->selecionar($id);
    }
  } else {
    header('location: index.php');
  }
}


function add(){
  if (!empty($_POST['nota1'])) {

    $connection = new ConnectionFactory();
    $NotaDao = new NotaDao($connection->getConnection());

    $nota = new Nota();
    $date = new DateTime();


    $nota->setAluno($_POST['id_aluno']);
    $nota->setProfessor($_POST['id_professor']);
    $nota->setCurso($_POST['id_curso']);
    //$nota->setAluno($_POST['id_aluno']);
    //$professor->setDataNascimento($_POST['data_nascimento']);
    $nota->setdataCriacao($date->format("Y-m-d H:i:s"));
    $nota->setNota1($_POST['nota1']);
    $nota->setNota2($_POST['nota2']);
    $nota->setNota3($_POST['nota3']);
    $nota->setNota4($_POST['nota4']);


    if($NotaDao->cadastrar($nota)){
      header('location: notas.php');
    }else{
      echo "error";

    }

    echo 'teste';
  }

}




?>
