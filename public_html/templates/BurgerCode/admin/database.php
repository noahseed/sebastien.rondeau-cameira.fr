<?php

/**
 * Connexion à la base de données
 */
class Database
{
	
	private static $dbHost = "localhost";
	private static $dbName = "burgercode";
	private static $dbUser = "burgercode";
	private static $dbUserPassword = "624nxm1ul8aY9LJJ";

	private static $connection = null;

	public static function connect(){
		try {
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName . ";charset=utf8",
		        self::$dbUser,
		        self::$dbUserPassword);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
		return self::$connection;
	}

	public static function disconnect(){
		self::$connection = null;
	}
}
