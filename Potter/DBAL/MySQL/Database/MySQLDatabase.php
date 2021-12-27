<?php

namespace Potter\DBAL\MySQL\Database;

use Potter\DBAL\{
    MySQL\Connection\MySQLConnectionInterface,
    Server\ServerInterface
};

final class MySQLDatabase extends AbstractMySQLDatabase
{
    public function __construct(private MySQLConnectionInterface $connection, private string $database)
    {

    }

    final public function getName(): string
    {
        return $this->database;
    }

    final public function getServer(): ServerInterface
    {
        return $this->connection;
    }
}