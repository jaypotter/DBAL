<?php

namespace Potter\DBAL\Server\Local;

use Potter\Connection\Local\AbstractLocalConnection;

abstract class AbstractLocalDatabaseServer extends AbstractLocalConnection implements LocalDatabaseServerInterface
{
    private const PREFIX = 'db_local';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}