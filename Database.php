<?php

class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=laracasts_php;user=root;password=1;charset=utf8mb4;unix_socket=/tmp/mysql.sock';
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}