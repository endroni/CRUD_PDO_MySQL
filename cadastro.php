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

		<form name="FormCadastro" id="Form" method="POST" action="Controllers/ControllerCadastro.php">

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

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="Salvar">
			</div>
		</form>		
	</div>
</div>

<?php include('Includes/Footer.php'); ?>

