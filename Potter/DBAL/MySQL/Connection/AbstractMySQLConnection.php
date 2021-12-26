<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\{
    PDO\Connection\Remote\AbstractRemotePDOConnection,
    Statement\StatementInterface
};

abstract class AbstractMySQLConnection extends AbstractRemotePDOConnection implements MySQLConnectionInterface
{  
    private const PREFIX = 'mysql';

    abstract public function getDatabases(): array;

    final public function getPrefix(): string
    {
        return self::PREFIX;
    }

    abstract public function showDatabases(string $like = ''): array;

    abstract public function showGrantsForCurrentUser(): array;
}