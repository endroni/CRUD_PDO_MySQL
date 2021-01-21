<?php

class ClassConexao{
	#Conecta com o banco
	public function conectaDB()
	{
		try {
			$Con=new PDO("mysql:host=localhost;dbname=db_crud_pdo","root","");
			return $Con;
		} catch (PDOException $Erro) {
			return $Erro->getMessage();
		}
	}
}

?>

