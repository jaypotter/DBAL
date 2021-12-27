<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\{
    Database\DatabaseInterface,
    Statement\StatementInterface
};

final class MySQLConnection extends AbstractMySQLConnection implements MySQLConnectionInterface
{
    use MySQLConnectionTrait, MySQLPDOConnectionTrait;

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->setDsn("mysql:host=$server;port=$port");
        $this->connect();   
    }

    public function getDatabase(string $database): DatabaseInterface
    {
        if (!$this->databaseExists($database)) {
            throw new InvalidDatabaseSelectionException;
        }
        return new MySQLDatabase($this, $database);
    }
}