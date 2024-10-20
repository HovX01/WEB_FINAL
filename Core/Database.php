<?php

namespace Core;

use PDO;
use PDOStatement;

class Database
{
    public PDO $connection;
    public PDOStatement $statement;

    public function __construct($config)
    {
        [
          'driver' => $driver,
          'host' => $host,
          'port' => $port,
          'dbname' => $dbname,
          'username' => $username,
          'password' => $password
        ] = $config;
        $dsn = "$driver:" . http_build_query(['host' => $host,'port' => $port, 'dbname' => $dbname], '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
