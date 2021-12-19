<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Server\AbstractDatabaseServer;

final class MySQLiConnection extends AbstractDatabaseServer implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;

    private const PREFIX = 'mysqli';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}