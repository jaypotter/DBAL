<?php

namespace Potter\DBAL\Server;

require_once __DIR__ . '/../Database/DatabaseInterface.php';

use Potter\DBAL\Database\DatabaseInterface;

interface DatabaseServerInterface
{
    public function connect(): void;

    public function disconnect(): void;

    public function getDatabase(string $database): DatabaseInterface;
}