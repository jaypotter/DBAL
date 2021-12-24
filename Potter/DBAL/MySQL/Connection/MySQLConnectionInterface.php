<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Server\Remote\RemoteDatabaseServerInterface;

interface MySQLConnectionInterface extends RemoteDatabaseServerInterface
{
    public const DEFAULT_PORT = 3306;
}