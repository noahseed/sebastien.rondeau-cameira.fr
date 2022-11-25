<?php


abstract class Db
{
    protected static $_instance = null;

    public static function getInstance()
    {
        if(self::$_instance === null)
        {
            self::$_instance = new PDO
            (
                'mysql:host=localhost;dbname=maxxiebot;charset=utf8mb4',
                'maxxiebot',
                '1f7KdHGgnXcCFdZVhxto',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        return self::$_instance;
    }

    protected $pdo;


    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    //abstract public function find(int $id);

    //abstract public function findAll();

}
