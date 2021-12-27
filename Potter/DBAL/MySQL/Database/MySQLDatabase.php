<?php

namespace Potter\DBAL\MySQL\Database;

use Potter\DBAL\MySQL\Connection\MySQLConnectionInterface;

final class MySQLDatabase extends AbstractMySQLDatabase
{
    use MySQLDatabaseTrait;

    public function __construct(private MySQLConnectionInterface $connection, private string $database)
    {

    }
}