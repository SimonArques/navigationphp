<?php
class Database2
{
	private static $dbName = 'statmassql';
	private static $dbHost = 'localhost';
	private static $dbUsername = 'simon';
	private static $dbUserPassword = 'rootsan';
	
	private static $cont = null;
	
	//Constructor of Database class,initialization not allowed.
	public function __construct(){
		die('Init function is not allowed');
	}
	
	//Database connection singleton pattern.
	public static function connect(){
		
		
		if (null == self::$cont ){
			try{
				self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
			}
			catch(PDOException $e){
				die($e->getMessage());
			}
		}
		return self::$cont;
	}
	
	//Disconnection, set session to null.
	public static function disconnect(){
		self::$cont = null;
	}
}
?>