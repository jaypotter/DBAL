<?php

namespace Potter\DBAL\Server;

require_once __DIR__ . '/DatabaseServerInterface.php';

abstract class AbstractDatabaseServer implements DatabaseServerInterface
{
    public function __destruct()
    {
        $this->disconnect();
    }
    abstract public function connect(): void;

    abstract public function disconnect(): void;
}