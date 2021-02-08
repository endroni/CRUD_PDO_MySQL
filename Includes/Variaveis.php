<?php
	if(isset($_POST['Acao'])){
		$Acao=filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($GET['Acao'])){
		$Acao=filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
  	}else{
  		$Acao="";
  	}

	if(isset($_POST['id'])){
		$Id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($GET['id'])){
		$Id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
  	}else{
  		$Id=0;
  	}


	if(isset($_POST['nome'])){
		$Nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($GET['nome'])){
		$Nome=filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  	}else{
  		$Nome="";
  	}

	if(isset($_POST['Sexo'])){
		$Sexo=filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($GET['Sexo'])){
		$Sexo=filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
  	}else{
  		$Sexo="";
  	}

	if(isset($_POST['Cidade'])){
		$Cidade=filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
	}elseif(isset($GET['Cidade'])){
		$Cidade=filter_input(INPUT_GET, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
  	}else{
  		$Cidade="";
  	}
?>