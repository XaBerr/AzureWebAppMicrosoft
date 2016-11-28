<?php
class Query {
	private $currentConnection = null;
	public function __construct( $_connection ) {
		$this->currentConnection = $_connection;
	}
	public function query( $_query ) {
		$database = $this->currentConnection->database;
		$error = "Error query [$_query]";
		$query = $database->prepare($_query);
		$_result = $query->execute();
		if(!$_result) {
			echo "$_query<br>";
			echo "Something wrong: $error";
			var_dump($query->errorInfo());
			var_dump($database->errorInfo());
			exit();
		}
		return $query;
	}
}

class Connection {
	public $database;
	public $info;
	public function __construct( $_srv, $_db, $_usr, $_pass) {
		$this->connection = "mysql:host=$_srv;dbname=$_db";
		$this->database = new PDO( $this->connection, $_usr, $_pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		$this->info = [];
		$this->info["server"]		= $_srv;
		$this->info["database"]	= $_db;
		$this->info["user"]			= $_usr;
		$this->info["password"]	= $_pass;
	}
}
?>
