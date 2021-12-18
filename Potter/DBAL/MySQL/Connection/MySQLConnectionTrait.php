<?php

namespace Potter\DBAL\MySQL\Connection;

trait MySQLConnectionTrait
{
    final public function __construct(string $user, string $password, string $server = 'localhost', int $port = 3306)
    {
        
    }
}