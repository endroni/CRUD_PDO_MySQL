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
					<td><?php $Fetch['nome']; ?></td>
					<td><?php $Fetch['sexo']; ?></td>
					<td><?php $Fetch['cidade']; ?></td>
					<td>
						<a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="img/lupa.png" alt="Visualizar"></a>
						<a href="atualizacao.php"><img src="img/edit.png" alt="Editar"></a>
						<a href="delete.php"><img src="img/delete.png" alt="Deletar"></a>
					</td>
				</tr>		
		<?php		
			}
		?>
	</table>
</div>

<?php include('Includes/Footer.php'); ?>

