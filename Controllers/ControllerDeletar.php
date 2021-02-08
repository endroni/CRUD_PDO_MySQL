<?php
	include("../Class/ClassCrud.php");

	$Crud=new ClassCrud();
	$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

	$Crud->deleteDB(
		"tbl_usuario",
		"id=?",
		array(
			$IdUser
		)
	);

	echo "Dado deletado com sucesso!";