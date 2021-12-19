<?php

namespace Potter\DBAL\Server;

use Potter\{
    Connection\AbstractConnection,
    DBAL\Database\DatabaseInterface
};

abstract class AbstractDatabaseServer extends AbstractConnection implements DatabaseServerInterface
{
    private const PREFIX = 'db';

    abstract public function getDatabase(string $database): DatabaseInterface;

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}