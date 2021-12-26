<?php

namespace Potter\DBAL\MySQLi\Connection;

use \MySQLi;
use Potter\DBAL\{
    MySQL\Connection\MySQLConnectionInterface,
    MySQLi\MySQLiStatement,
    Server\Remote\AbstractRemoteDatabaseServer,
    Statement\StatementInterface
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