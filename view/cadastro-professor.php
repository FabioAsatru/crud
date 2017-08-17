<?php require_once '../config.php'; ?>
<?php require_once '../controller/ProfessorController.php';
      add();
 ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo professor</h2>

<form action="cadastro-professor.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" id="nome" class="form-control" name="nome">
    </div>



    <div class="form-group col-md-2">
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


    <div class="form-group col-md-4">
      <label for="campo3">Data de Nascimento</label>
      <input type="date" class="form-control" name="data_nascimento" >
    </div>
  </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="professores.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
