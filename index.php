<?php

class DB{
	public $username = "root";
	public $pass ="";
	public $hostname = "localhost";
	public $database = "ilicheva";
	public $mysql;
	public $tableName;

	public function __construct(){
		$this->mysql = new mysqli($this->hostname, $this->username, $this->pass, $this->database);
	}

	public function geyAllRecords($tableName){
		//$this->connect();
		//$this->mysql = new mysqli($this->hostname, $this->username, $this->pass, $this->database);
		$result1 = $this->mysql->query("SELECT * FROM $tableName");
		$user1 = $result1->fetch_all(); // Конвертируем в массив
		var_dump($user1);
		return $user1;
	}

	public function getRowById($tableName, $name, $try, $ends, $name1, $name2, $name3){
		$this->mysql->query("INSERT INTO $tableName ($name1, $name2, $name3)
		VALUES('$name', '$try', '$ends')");
		$this->mysql->close();
	}
}

class Database extends DB{

}

$Search= new Database();
//$tableName="users";

$data = $Search->geyAllRecords('real2');
echo("\n 1 BD: ");
//var_dump($Search);
//var_dump($data);

$name="Yjsg327dh8dsf";
$try="jkhdho";
$ends="kljdslj";
$name1='uyi';
$name2='gtr';
$name3='tys';
//$Search->geyAllRecords($tableName);
//$Search->getRowById($tableName, $name, $try, $ends);
//$data2 = $Search->getRowById('real2', $name, $try, $ends, $name1, $name2, $name3);


$Search= new DB();
//$tableName="users";
echo("\n 2 BD: ");
$data = $Search->geyAllRecords('search');































//class User{
//	public $login="";
//	public $pass;
//	public function auth($login){
//		echo $this->login = $login;
//		echo $this->pass;
//	}
//}
//$user= new User();
//var_dump($user);
//$user->auth("login11111");
//var_dump($user);
//$user1= new User();
//var_dump($user1);

?>