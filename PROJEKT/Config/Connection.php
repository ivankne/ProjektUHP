<?php

namespace Config;


class Connection
{
    const DB_NAME = 'projekti';
    const HOSTNAME = 'localhost'; // 127.0.0.1
    const USERNAME = 'root';
    const PASSWORD = '';

    private $connection;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        try{
            $this->connection = new \PDO(
                "mysql:host=".
                self::HOSTNAME .
                ";dbname=" . self::DB_NAME,
                self::USERNAME,
                self::PASSWORD
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e){
            die("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }


}