<?php

class DB{

	/*
	 * singleton design pattern of database
	*/

	//prirvate instance of the database object
	private static $_instance = null;
	private $_pdo;
	private $_query;
	private $_error = false;
	public $_results;
	private $_count = 0;

	private function __construct(){

		$host = Config::get('mysql/host');
		$db = Config::get('mysql/db');
		$username = Config::get('mysql/username');
		$password = config::get('mysql/password');

		//mysql_connect($host, $password, $password) or die(mysql_error());
		//mysql_select_db($db) or die(mysql_error());

		try{
			$this->_pdo = new PDO('mysql:host='. $host . ';port=3306;dbname=' . $db, $username, $password);
		}
		catch(PDOException $error){
			die($error->getMessage());
		}

	}

	public static function getInstance(){
		/*
		 * if the db instance is NOT set then we will create one
		 * otherwise, if its already set then we will just return the regular
		 * db object, this make sure we NEVER have more than 1 instance of the
		 * the DB object
		*/
		
		if (!isset(self::$_instance)) {
			self::$_instance = new DB();
		}

		return self::$_instance;
	
	}

	public function insert($table, $fields = array()){
		if (count($fields)) {
			$keys = array_keys($fields);
			$keys = "`". implode('`, `', $keys) . "`";
			$values = '';
			$x = 1;

			foreach ($fields as $field) {
				$values .= '?';
				if ($x < count($fields)) {
					$values .= ', ';
				}
				$x++;
			}

			$sql = "INSERT INTO $table ($keys) VALUES ($values)";

			if (!$this->query($sql, $fields)->error()) {
				return true;
			}

		}

		return false;

	}

	public function update($table, $id, $fields = array()){
		$set = '';
		$x = 1;

		foreach ($fields as $name => $value) {
			$set .= "$name = ?";
			if ($x < count($fields)) {
				$set .= ', ';
			}
			$x++;
		}

		$sql = "UPDATE $table SET $set WHERE id = {$id}";

		if ($this->query($sql, $fields)->error()) {
			return true;
		}

		return false;

	}

	public function query($sql, $params = array()){
		$this->_error = false;
		if (count($params) !== 0) {// if there are paramaters then we need to bind the values
			if ($this->_query = $this->_pdo->prepare($sql)) {
				$count = 1;
				if (count($params)) {
					foreach ($params as $param) {
						$this->_query->bindValue($count, $param);
						$count++;
					}
				}

				if ($this->_query->execute()) {
					$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ); //fetches into an array
					$this->_count = $this->_query->rowCount();
				}
				else{
					$this->_error = true;
				}
			}
		} 
		else{ // if there are no fields then SELECT * FROM $table is usually how it is
			if ($this->_query = $this->_pdo->prepare($sql)) {
				if ($this->_query->execute()) {
					$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ); //fetches into an array
					$this->_count = $this->_query->rowCount();
				}
				else{
					$this->_error = true;
				}
			}

			//print_r($this->_results);
		}
		return $this;
	}

	private function action($action, $table, $where=array()){
		if (count($where) === 3) {
			$operators = array('=', '<', '>', '=<', '=>');
			$field = $where[0];
			$operator = $where[1];
			$value = $where[2];

			if (in_array($operator, $operators)) {
				$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
				if (!$this->query($sql, array($value))->error()) {
					return $this;
				}
			}
		}
		elseif(count($where) == 0){
			$sql = "{$action} FROM {$table}";
			$this->query($sql);
			return $this;
		}

		return false;
	}

	public function get_all($table){
		return $this->action('SELECT *', $table);
	}

	public function get($table, $where){
		return $this->action('SELECT *', $table, $where);
	}

	public function delete($table, $where){
		return $this->action('DELETE', $table, $where);
	}

	public function count(){
		return $this->_count;
	}

	public function results(){
		return $this->_results;
	}

	public function first(){
		//get the first result of the array form the sql
		return $this->_results[0];
	}

	public function error(){
		return $this->_error;
	}

}

?>