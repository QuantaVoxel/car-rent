<?php

namespace Backend\CarRent;

class Database extends \Pdo\Mysql
{
    public function __construct()
    {
        $config = config();
        $host = $config['database']['host'];
        $username = $config['database']['username'];
        $password = $config['database']['password'];
        $name = $config['database']['name'];

        $dsn = "mysql:host={$host};dbname={$name};charset=utf8mb4";
        parent::__construct($dsn, $username, $password);
    }

    public static function getInstance(): Database
    {
        return new self();
    }
}