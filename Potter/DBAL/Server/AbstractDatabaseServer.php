<?php

namespace Potter\DBAL\Server;

use Potter\DBAL\Database\DatabaseInterface;

abstract class AbstractDatabaseServer implements DatabaseServerInterface
{
    abstract public function connect(): void;

    abstract public function getDatabase(string $database): DatabaseInterface;
}