
<?php require_once '../config.php'; ?>
<?php
  require_once '../controller/ProfessorController.php';
  $id = $_GET['id'];
  delete($id);

?>




<?php include(HEADER_TEMPLATE); ?>
