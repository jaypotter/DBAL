<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Server\Remote\AbstractRemoteDatabaseServer;

final class MySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;

    private const PREFIX = 'mysqli';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}