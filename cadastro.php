<?php include('Includes/Header.php'); ?>

<div class="Content">
	<?php
		include('Class/ClassConexao.php');
		include('Class/ClassCrud.php');		
	?>

	<div class="Resultado">
		
	</div>

	<div class="Formulario">
		<h1 class="Center">Cadastro</h1>

		<div class="FormularioInput">
			Nome:<br>
			<input type="text" id="Nome" name="Nome">
		</div>

		<div class="FormularioInput">
			Sexo:<br>
			<input type="text" id="Sexo" name="Sexo">
		</div>

		<div class="FormularioInput">
			Cidade:<br>
			<input type="text" id="Cidade" name="Cidade">
		</div>

		<div class="FormularioInput">
			<input type="submit" value="Salvar">
		</div>		
	</div>
</div>

<?php include('Includes/Footer.php'); ?>

