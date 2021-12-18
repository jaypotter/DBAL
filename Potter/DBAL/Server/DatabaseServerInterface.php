<?php

namespace Potter\DBAL\Server;

use Potter\DBAL\Database\DatabaseInterface;

interface DatabaseServerInterface
{
    public function connect(): void;

    public function getDatabase(string $database): DatabaseInterface;
}