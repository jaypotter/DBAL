<?php

namespace Potter\DBAL\MySQL\Connection;

use \MySQLi;

use Potter\DBAL\Server\Remote\AbstractRemoteDatabaseServer;

final class MySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;

    private const PREFIX = 'mysqli';

    private MySQLi $handle;

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->connect();   
    }

    public function connect(): void
    {
        $this->handle = new MySQLi(
            hostname: $this->getHost(),
            username: $this->getUser(),
            password: $this->getPass()
        );
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}