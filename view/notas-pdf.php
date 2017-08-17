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
require_once("../mpdf60/mpdf.php");


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


$html = "<h2 align='center'>Relatorio de Notas<h2>";

$html .=

"<table>
	<thead>
	  <tr >
	      <th  width='20%'>Nome</th>
        <th  width='20%' >Disciplina</th>
        <th  width='20%' >Professor</th>
        <th  width='20%'>Media</th>
        <th  width='20%'>Status</th>


	  </tr>
	</thead>
	<tbody>";

  foreach ($notas as $nota) {


  	$media =
    (
      $nota['nota1']+$nota['nota2']+$nota['nota3']+$nota['nota4']
    )/4;

    if ($media > 5) {
      $status = 'aprovado';
    }else{
      $status = 'reprovado';
    }


  	$html .=
  	"<tr>
  		<th>".findAluno($nota['id_aluno'])."</th>
  		<th>".findCurso($nota['id_curso'])."</th>
      <th>".findProfessor($nota['id_professor'])."</th>
      <th>".$nota['nota2']."</th>
      <th>".$status."</th>

  	</tr>";
  }

  $html .= "</tbody>";
  $html .= "</table>";


  $mpdf=new mPDF();
  $mpdf->SetDisplayMode('fullpage');
  $mpdf->WriteHTML($html);
  $mpdf->Output();








 ?>
