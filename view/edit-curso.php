<?php require_once '../config.php'; ?>
<?php require_once '../controller/CursoController.php';
      edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Curso</h2>

<form action="edit-curso.php?id=<?php echo $curso['id_curso']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" id="nome" class="form-control" name="nome"  value="<?php echo $curso['nome']; ?>" >
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="cursos.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
