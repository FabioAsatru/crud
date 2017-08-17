<?php

require_once("../mpdf60/mpdf.php");
require_once("../model/ConnectionFactory.php");
require_once("../model/Aluno.php");
require_once("../model/AlunoDao.php");

$factory = new ConnectionFactory();
$alunoDao = new AlunoDao($factory->getConnection());
$alunos = $alunoDao->listar();

$html = "<h2 align='center'>Relatorio de Alunos<h2>";

$html .=

"<table>
	<thead>
	  <tr>
	      <th width='20%'>Nome</th>
	      <th width='20%' >Cidade</th>
	      <th width='20%'>Bairro</th>
        <th width='20%'>Nº</th>
	      <th width='20%'>Rua</th>
	  </tr>
	</thead>
	<tbody>";

foreach ($alunos as $aluno) {
	$html .=
	"<tr>
		    <th>".$aluno['nome']."</th>
      	<th>".$aluno['cidade']."</th>
      	<th>".$aluno['bairro']."</th>
        <th>".$aluno['numero']."</th>
        <th>".$aluno['logradouro']."</th>

	</tr>";
}
$html .= "</tbody>";
$html .= "</table>";

$mpdf=new mPDF();
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();
