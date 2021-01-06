<?php

include dirname(__FILE__) . '/config/Connection.php';

class ShirtOrderRepository extends Connection
{
    private $connection;
    public function __construct()
    {
        parent::__construct();
        $this->connection = $this->connect();
    }

    public function __call($method, $args)
    {
        echo '1234';
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $args);
        }
    }

    public function setQuery()
    {
        echo 'setQuery';
    }
}

$n = new ShirtOrderRepository();
$n->setQuery();
