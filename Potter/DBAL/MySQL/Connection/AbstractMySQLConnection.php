<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\{
    PDO\Connection\Remote\AbstractRemotePDOConnection,
    Statement\StatementInterface
};

abstract class AbstractMySQLConnection extends AbstractRemotePDOConnection implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;
    
    private const PREFIX = 'mysql';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

    abstract public function showDatabases(string $like = ''): array;
}