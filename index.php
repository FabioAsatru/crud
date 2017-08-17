<?php require_once 'config.php'; ?>

<?php include(HEADER_TEMPLATE); ?>


<h1>Dashboard</h1>
<hr />

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="view/alunos.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-users fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Alunos</p>
				</div>
			</div>
		</a>
	</div>
</div>

<div class="col-xs-6 col-sm-3 col-md-2">
	<a href="view/professores.php" class="btn btn-default">
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-users fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>professores</p>
			</div>
		</div>
	</a>
</div>


<div class="col-xs-6 col-sm-3 col-md-2">
	<a href="view/cursos.php" class="btn btn-default">
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-book fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>Cursos</p>
			</div>
		</div>
	</a>
</div>

<div class="col-xs-6 col-sm-3 col-md-2">
	<a href="view/notas.php" class="btn btn-default">
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-bar-chart fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>Notas</p>
			</div>
		</div>
	</a>
</div>



<div class="col-xs-6 col-sm-3 col-md-2">
	<a href="view/relatorios.php" class="btn btn-default">
		<div class="row">
			<div class="col-xs-12 text-center">
				<i class="fa fa-file-pdf-o fa-5x"></i>
			</div>
			<div class="col-xs-12 text-center">
				<p>Relatorios</p>
			</div>
		</div>
	</a>
</div>




</div>



<?php include(FOOTER_TEMPLATE); ?>
