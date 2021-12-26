<?php

namespace Potter\DBAL\MySQLi\Connection;

final class MySQLiConnection extends AbstractMySQLiConnection
{
    public function __construct(string $user, string $password, string $server = 'localhost', int $port = self::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->connect();   
    }
}