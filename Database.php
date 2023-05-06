<?php

class Database
{
    private $connection;

    public function __construct($configs, $username = 'root', $password = '1')
    {
        $dsn = 'mysql:' . http_build_query($configs, '', ';') . ";unix_socket=/tmp/mysql.sock";
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}