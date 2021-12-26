<?php

namespace Potter\DBAL\MySQLi\Connection;

use \MySQLi;
use Potter\DBAL\MySQL\Connection\{
    MySQLConnectionInterface,
    MySQLConnectionTrait
};
use Potter\DBAL\{
    MySQLi\MySQLiStatement,
    Server\Remote\AbstractRemoteDatabaseServer,
    Statement\StatementInterface
};

abstract class AbstractMySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLiConnectionInterface
{
    use MySQLConnectionTrait, MySQLiHandleTrait, MySQLiShowTrait;

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

    final public function getPrefix(): string
    {
        return self::PREFIX;
    }

    final public function prepare(string $statement): StatementInterface
    {
        return new MySQLiStatement($this, $statement);
    }
}