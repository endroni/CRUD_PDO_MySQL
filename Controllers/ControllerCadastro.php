<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");		

$Crud=new ClassCrud();
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