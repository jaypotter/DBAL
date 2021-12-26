<?php

namespace Potter\DBAL\MySQLi\Connection;

use Potter\DBAL\MySQL\Connection\MySQLConnectionTrait;

final class MySQLiConnection extends AbstractMySQLiConnection
{
    use MySQLConnectionTrait, MySQLiHandleTrait, MySQLiShowTrait;

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = self::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->connect();   
    }
    
    final public function send(string $bytes): mixed
    {
        return '';
    }
}