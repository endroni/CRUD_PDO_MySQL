<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");		

$Crud=new ClassCrud();

if($Acao=='Cadastrar') {
	$Crud->insertDB(
		"tbl_usuario",
		"?,?,?,?",
		array(
			$Id,
			$Nome,
			$Sexo,
			$Cidade
		)
	);

	echo "Cadastro realizado com suceso!";	
}else{
	$Crud->updateDB(
		"tbl_usuario",
		"nome=?, sexo=?, cidade=?",
		"id=?",
		array(
			$nome,
			$sexo,
			$cidade,
			$id
		)
	);
	echo "Cadastro Atualizado com suceso!";
}

