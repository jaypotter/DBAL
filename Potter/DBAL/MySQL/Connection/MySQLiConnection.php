<?php

namespace Potter\DBAL\MySQL\Connection;

use \MySQLi;

use Potter\DBAL\Server\Remote\AbstractRemoteDatabaseServer;

final class MySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;

    private const PREFIX = 'mysqli';

    public function connect(): void
    {
        $this->setHandle(
            new MySQLi(
                hostname: $this->getHost(),
                username: $this->getUser(),
                password: $this->getPass()
            )
        );
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}