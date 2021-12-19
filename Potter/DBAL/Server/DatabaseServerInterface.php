<?php

namespace Potter\DBAL\Server;

use Potter\{
    Connection\ConnectionInterface,
    DBAL\Database\DatabaseInterface
};

interface DatabaseServerInterface extends ConnectionInterface
{
    public function getDatabase(string $database): DatabaseInterface;
}