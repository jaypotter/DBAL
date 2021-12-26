<?php

namespace Potter\DBAL\Server;

use Potter\Connection\ConnectionInterface;
use Potter\DBAL\{
    Database\DatabaseInterface,
    Statement\StatementInterface
};

interface DatabaseServerInterface extends ConnectionInterface
{
    //public function getDatabase(string $database): DatabaseInterface;

    public function getDatabases(): array;

    public function prepare(string $statement, bool $immediate = false): StatementInterface;
}