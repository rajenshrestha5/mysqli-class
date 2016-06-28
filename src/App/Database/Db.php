<?php

namespace App\Database;

use Exception;
use mysqli;

class Db
{
    /**
     * DB Hostname
     *
     * @var string
     */
    private $host = 'localhost';

    /**
     * DB Username
     *
     * @var string
     */
    private $username = 'root';

    /**
     * DB Password
     *
     * @var string
     */
    private $password = '';

    /**
     * DB Database Name
     *
     * @var string
     */
    private $dbname = 'db_oop';


    private $connection = null;


    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if(!$this->connection){
            throw new Exception('Failed to Connect to Database');
        }

        //@todo Make exception class

    }

    public function insert($tableName, $data)
    {
        //getting table fields from data
        $fields = array_keys($data);

        //making field query string
        $fieldStr = implode(',',$fields);

        $valueStr = '';

        foreach ($data as $item) {
            $item = $this->connection->escape_string($item);
            $valueStr .= "'{$item}',";
        }

        $valueStr = trim($valueStr, ',');

        $query = "INSERT INTO {$tableName} ($fieldStr) VALUES ($valueStr)";

        // execute query
        if(!$this->connection->query($query)){
            throw new Exception('Failed to Insert Data. Error: ' . $this->connection->error);
        }

        return true;
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}



