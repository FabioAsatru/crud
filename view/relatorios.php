<?php require_once '../config.php'; ?>


<?php include(HEADER_TEMPLATE); ?>


<h1>Relatorios</h1>
<hr />

<table class="table table-striped">
<thead>
  <tr>
    <th width="80%">Tipo</th>
    <th>Opcoes</th>

  </tr>
</thead>
<tbody>
  <tr>
    <td>Relatorio de Alunos</td>
    <td><a href="aluno-pdf.php" class="fa fa-file-pdf-o fa-2x" style="width:100px;" ></a></td>

  </tr>
  <tr>
    <td>Relatorio de Professores</td>
    <td><a href="professor-pdf.php" class="fa fa-file-pdf-o fa-2x" style="width:100px;" ></a></td>

  </tr>
  <tr>
    <td>Relatorio de Notas</td>
    <td><a href="notas-pdf.php" class="fa fa-file-pdf-o fa-2x" style="width:100px;" ></a></td>
  </tr>
</tbody>
</table>


</div>


</div>



<?php include(FOOTER_TEMPLATE); ?>
