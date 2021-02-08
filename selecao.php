<?php 
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>

<div class="Content">
	<table class="TabelaCrud">
		<tr>
			<td>Nome</td>
			<td>Sexo</td>
			<td>Cidade</td>
			<td>Ações</td>
		</tr>


		<!-- Estrutura de loop -->
		<?php
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB(
				"*",
				"tbl_usuario",
				"",
				array()
			);

			while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
		?>
				<tr>
					<td><?php echo $Fetch['nome']; ?></td>
					<td><?php echo $Fetch['sexo']; ?></td>
					<td><?php echo $Fetch['cidade']; ?></td>
					<td>
						<a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="img/lupa.png" alt="Visualizar"></a>
						<a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="img/edit.png" alt="Editar"></a>
						<a Class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['id']}"; ?>"><img src="img/delete.png" alt="Deletar"></a>
					</td>
				</tr>		
		<?php		
			}
		?>
	</table>
</div>

<?php include('Includes/Footer.php'); ?>

