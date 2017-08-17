<?php

require_once("../model/ConnectionFactory.php");
require_once("../model/CursoDao.php");
require_once("../model/Curso.php");

//index

$connection = new ConnectionFactory();
$CursoDao = new CursoDao($connection->getConnection());
$cursos = $CursoDao->listar();


function delete($id = null) {

  $factory = new ConnectionFactory();
  $CursoDao = new CursoDao($factory->getConnection());

  if($CursoDao->excluir($id)){
    //echo "success";
    header('location: cursos.php');
  }else{
    echo "error";
  }

}

function edit(){

  $factory = new ConnectionFactory();
  $CursoDao = new CursoDao($factory->getConnection());


  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['nome'])) {

      $curso = new Curso();
      $curso->setId($id);
      $curso->setNome($_POST['nome']);


      if($CursoDao->editar($curso)){
          header('location: cursos.php');
      }else{
          echo "error de atualizacao";
      }

    } else {
      global $curso;
      $curso = $CursoDao->selecionar($id);
    }
  } else {
    header('location: index.php');
  }
}


function add(){
  if (!empty($_POST['nome'])) {

    $connection = new ConnectionFactory();
    $CursoDao = new CursoDao($connection->getConnection());

    $curso = new Curso();
    $date = new DateTime();

    $curso->setNome($_POST['nome']);
    $curso->setdataCriacao($date->format("Y-m-d H:i:s"));
    //$->setCurso($_POST['id_curso']);

    if($CursoDao->cadastrar($curso)){
      header('location: cursos.php');
    }else{
      echo "error";
    }

    //echo $nome;
  }

}




?>
