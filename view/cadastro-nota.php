<?php require_once '../config.php'; ?>
<?php require_once '../controller/NotasController.php';
      add();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Lancamento de notas</h2>

<form action="cadastro-nota.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-6 ">
    <label for="campo3">Aluno</label>

    <select class="form-control" name="id_aluno">
    <?php if ($alunos) : ?>
    <?php foreach ($alunos as $aluno) : ?>
      <option value=<?php echo $aluno['id_aluno'] ?>>
            <?php echo $aluno['nome'] ?>
      </option>
    <?php endforeach; ?>
    <?php else : ?>
      <option value="0">Sem Alunos</option>
    <?php endif; ?>
    <select>
    </div>

    <div class="form-group col-md-4 ">
    <label for="campo3">Curso</label>
    <select class="form-control" name="id_curso">
    <?php if ($cursos) : ?>
    <?php foreach ($cursos as $curso) : ?>
      <option value=<?php echo $curso['id_curso'] ?>>
            <?php echo $curso['nome'] ?>
      </option>
    <?php endforeach; ?>
    <?php else : ?>
      <option value="0">Sem cursos</option>
    <?php endif; ?>
    <select>
    </div>

    <div class="form-group col-md-7 ">
    <label for="campo3">Professor</label>
    <select class="form-control" name="id_professor">
    <?php if ($professores) : ?>
    <?php foreach ($professores as $professor) : ?>
      <option value=<?php echo $professor['id_professor'] ?>>
            <?php echo $professor['nome'] ?>
      </option>
    <?php endforeach; ?>
    <?php else : ?>
      <option value="0">Sem cursos</option>
    <?php endif; ?>
    <select>
    </div>

  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="name">nota 1</label>
      <input type="text" id="nome" class="form-control" name="nota1">
    </div>

    <div class="form-group col-md-2">
      <label for="name">nota 2</label>
      <input type="text" id="notas" class="form-control" name="nota2">
    </div>

    <div class="form-group col-md-2">
      <label for="name">nota 3</label>
      <input type="text" id="curso" class="form-control" name="nota3">
    </div>

    <div class="form-group col-md-2">
      <label for="name">nota 4</label>
      <input type="text" id="curso" class="form-control" name="nota4">
    </div>

  </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="notas.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
