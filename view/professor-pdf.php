<?php

require_once("../mpdf60/mpdf.php");
require_once("../model/ConnectionFactory.php");
require_once("../model/Professor.php");
require_once("../model/ProfessorDao.php");
require_once("../model/Curso.php");
require_once("../model/CursoDao.php");



$factory = new ConnectionFactory();
$professorDao = new professorDao($factory->getConnection());
$professores = $professorDao->listar();


function findCurso($id){

    $connection = new ConnectionFactory();
    $CursoDao = new CursoDao($connection->getConnection());
    $curso = new Curso();
    $curso = $CursoDao->selecionar($id);
    return $curso['nome'];

}



$html = "<h2 align='center'>Lista de Professores<h2>";

$html .=

"<table>
	<thead>
	  <tr>
	      <th width='50%'>Nome</th>
        <th width='50%'>Disciplina</th>

	  </tr>
	</thead>
	<tbody>";

foreach ($professores as $professor) {
	$html .=
	"<tr>
		    <th>".$professor['nome']."</th>
        <th>". findCurso($professor['id_curso'])."</th>

	</tr>";
}
$html .= "</tbody>";
$html .= "</table>";

$mpdf=new mPDF();
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();
