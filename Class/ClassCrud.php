<?php
include("../Class/ClassConexao.php");

	class ClassCrud extends ClassConexao
	{
		#Atributos
		private $Crud;
		private $Contador;

		#Preparação das declarativas
		private function preparedStatements($Query, $Parametros)
		{
			$this->countParametros($Parametros);
			$this->Crud=$this->conectaDB()->prepare($Query);

			if($this->Contador > 0) {
				for($I=1; $I <= $this->Contador; $I++){
					$this->Crud->bindValue($I,$Parametros[$I-1]);
				}				
			}

			$this->Crud->execute();

		}

		#Contador de parâmetros
		private function countParametros($Parametros)
		{
			$this->Contador=count($Parametros);
		}

		#Insert no DB
		public function insertDB($Tabela, $Condicao, $Parametros){
			$this->preparedStatements("insert into {$Tabela} values ({$Condicao})" , $Parametros);
			return $this->Crud;
		}


	}

?>


