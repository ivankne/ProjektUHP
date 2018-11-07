<?php

namespace Model;

use Config\Connection;

class EntityRepository
{
    private $conn;

    private $className;
    private $classNameWithNamespace;

    public function __construct()
    {
        $this->className = str_replace(
            array('Repository', 'Model', '\\'),
            '',
            get_class($this) // User
        );

        $this->classNameWithNamespace = '\\Model\\' . $this->className;

        $connection = new Connection();

        $this->conn = $connection->getConnection();
    }

    private function prepareSql($addOnSql = '')
    {
        $query = "SELECT * FROM " . strtolower($this->className) . $addOnSql;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function getAll()
    {
        $stmt = $this->prepareSql();

        $result = $stmt->fetchAll(\PDO::FETCH_CLASS, $this->classNameWithNamespace);

        return $result;
    }

    public function getById($id)
    {
        $stmt = $this->prepareSql(" WHERE id = $id");

        $result = $stmt->fetchObject($this->classNameWithNamespace);

        return $result;
    }

    public function getOneBy(array $params)
    {
        $addOnSql = $this->addConditions($params);

        $addOnSql .= " LIMIT 1";

        $stmt = $this->prepareSql($addOnSql);

        $result = $stmt->fetchObject($this->classNameWithNamespace);

        if (!$result) {
            $result = null;
        }

        return $result;
    }

    public function getBy(array $params)
    {
        $addOnSql = $this->addConditions($params);

        $stmt = $this->prepareSql($addOnSql);

        $result = $stmt->fetchAll(\PDO::FETCH_CLASS, $this->classNameWithNamespace);

        return $result;
    }

    private function addConditions(array $params)
    {
        $addOnSql = '';

        $counter = 0;
        foreach ($params as $key => $value) {
            if ($counter == 0) {
                $addOnSql .= " WHERE ";
            } else {
                $addOnSql .= " AND ";
            }
            $addOnSql .= "`$key` = '$value'";
            $counter++;
        }

        return $addOnSql;
    }

}