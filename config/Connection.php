<?php

class Connection
{
    protected $configs;

    public function __construct()
    {

        $this->configs = require dirname(__FILE__) . '/database.php';
    }

    public function connect()
    {
        $connection = mysqli_connect($this->configs['host'] . ":" . $this->configs['port'], $this->configs['user'], $this->configs['password'], $this->configs['database']);
        if (!$connection) {
            echo "Error: Unable to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        return $connection;
    }

    protected function setConnection(): object
    {
        return $this->connect();
    }
}
