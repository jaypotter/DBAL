<?php

namespace Potter\DBAL\Server;

use Potter\Connection\AbstractConnection;
use Potter\DBAL\{
    Database\DatabaseInterface,
    Statement\StatementInterface
};

abstract class AbstractDatabaseServer extends AbstractConnection implements DatabaseServerInterface
{
    private const PREFIX = 'db';

    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

    abstract public function prepare(string $statement, bool $immediate = false): StatementInterface;
}