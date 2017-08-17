/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
*/
$('#delete-modal-aluno').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Aluno #' + id);
  modal.find('#confirm').attr('href', 'remove-aluno.php?id=' + id);
})

$('#delete-modal-professor').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Professor #' + id);
  modal.find('#confirm').attr('href', 'remove-professor.php?id=' + id);
})

$('#delete-modal-curso').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Curso #' + id);
  modal.find('#confirm').attr('href', 'remove-curso.php?id=' + id);
})

$('#delete-modal-nota').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir nota #' + id);
  modal.find('#confirm').attr('href', 'remove-nota.php?id=' + id);
})
