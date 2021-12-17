<?php

namespace Potter\DBAL\Server;

require_once __DIR__ . '/DatabaseServerInterface.php';

require_once __DIR__ . '/../Database/DatabaseInterface.php';

use Potter\DBAL\Database\DatabaseInterface;

abstract class AbstractDatabaseServer implements DatabaseServerInterface
{
    public function __destruct()
    {
        $this->disconnect();
    }
    abstract public function connect(): void;

    abstract public function disconnect(): void;

    abstract public function getDatabase(string $database): DatabaseInterface;
}