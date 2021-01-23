<?php
	include("Includes/Header.php");
?>

<?php
	include("Class/ClassConexao.php");
	$Conexao=new ClassConexao();
	$Conexao->conectaDB();
?>

<?php
	include("Includes/Footer.php");
?>

