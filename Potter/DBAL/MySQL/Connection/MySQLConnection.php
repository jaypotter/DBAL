<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\PDO\Connection\Remote\AbstractRemotePDOConnection;

final class MySQLConnection extends AbstractRemotePDOConnection implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;

    private const PREFIX = 'mysqli';

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->setDsn("mysql:host=$server;port=$port");
        $this->connect();   
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}