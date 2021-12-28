<?php

namespace Potter\DBAL\MySQLi\Connection;

use \MySQLi;
use Potter\DBAL\{
    Database\DatabaseInterface,
    MySQLi\MySQLiStatement,
    Statement\StatementInterface
};
use Potter\DBAL\MySQL\{
    Connection\MySQLConnectionInterface,
    Database\MySQLDatabase
};
use Potter\DBAL\Server\{
    Remote\AbstractRemoteDatabaseServer,
    InvalidDatabaseSelectionException
};

abstract class AbstractMySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLiConnectionInterface
{
    private const PREFIX = 'mysqli';

    final public function connect(): void
    {
        $this->setHandle(
            new MySQLi(
                hostname: $this->getHost(),
                username: $this->getUser(),
                password: $this->getPass(),
                port: $this->getPort()
            )
        );
    }

    final public function getDatabase(string $database): DatabaseInterface
    {
        if (!$this->databaseExists($database)) {
            throw new InvalidDatabaseSelectionException;
        }
        return new MySQLDatabase($this, $database);
    }

    abstract public function getHandle(): MySQLi;

    final public function getPrefix(): string
    {
        return self::PREFIX;
    }

    final public function prepare(string $statement, bool $immediate = false): StatementInterface
    {
        $statement = new MySQLiStatement($this, $statement);
        if (!$immediate) {
            return $statement;
        }
        $statement->execute();
        return $statement;
    }

    abstract public function setHandle(MySQLi $handle): void;
}