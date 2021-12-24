<?php

namespace Potter\DBAL\MySQL\Connection;

trait MySQLConnectionTrait
{
    final public function __construct(string $user, string $password, private string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        
    }
}