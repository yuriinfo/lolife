<?php 
	include_once dirname(__FILE__).'/config.php';

	class Database{
		public $conexao;

		public function __construct(){
			try{
				$this->conexao = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.'', DB_USER , DB_PWD);
				
				$this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				$this->conexao->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
			
			}catch(PDOException $erro){
				die($erro->getMessage());
			}
		}
	}
?>